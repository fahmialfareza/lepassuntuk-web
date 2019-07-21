<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Tour;
use App\ToursMeta;
use Auth;
use App\User;
use Carbon\Carbon;
use Mail;
use App\Mail\BookingSucceeded;
use App\Mail\BookingAvailable;
use App\Mail\BookingNotAvailable;
use App\Mail\ConfirmationAccepted;
use App\Mail\ConfirmationRejected;
use App;
use PDF;
use Jenssegers\Agent\Agent as Agent;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();

        return view('admin.bookings.index', compact('bookings'));
    }

    public function mybookings() {
        $user = Auth::user();
        $bookings = Booking::where('user_id', $user->id)->get();

        return view('user.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, Request $request)
    {
        $tour = Tour::find($id);
        $user = Auth::user();
        $tourmetas = $tour->tours_metas->sortBy('passanger');

        return view('user.bookings.create', compact('tour', 'user', 'tourmetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $tour = Tour::find($id);
        $tourmetas = $tour->tours_metas;
        $user = Auth::user();

        $formInput = $request->except('email', 'date');

        $request->date = Carbon::createFromFormat('m/d/Y', $request->date);
        $formInput['date'] = $request->date;

        $this->validate($request, [
            'name' => 'required',
            'tours_meta_id' => 'required|integer',
            'phone_number' => 'required|numeric|digits_between:3,20',
            'date' => 'required|date',
            'address' => 'required',
            'id_line' => 'min:0|max:50',
            'id_instagram' => 'min:0:max:50',
            'pickup_address' => 'min:0|max:255',
            'email' => 'required|email',
            'shuttle' => 'integer|min:0|max:3',
            'tours_meta_id' => 'integer',
        ]);

        if ($request->date <= Carbon::now()->addDays(3)) {
            return back()->with('error', 'Tanggal minimal 3 hari dari sekarang!');
        }

        foreach ($tour->tours_dates as $toursdate) {
            if ($request->date == $toursdate->date) {
                return back()->with('error', 'Ada kesalahan!');
            }
        }

        foreach ($tourmetas as $tourmeta) {
            if ($request->tours_meta_id == $tourmeta->id) {
                $tourmeta = ToursMeta::find($request->tours_meta_id);

                $formInput['user_id'] = $user->id;
                $formInput['email'] = $user->email;

                $unique_code = mt_rand(1,999);
                $formInput['unique_code'] = $unique_code;

                $shuttle = 0;
                if ($request->shuttle) {
                    if ($request->shuttle == 1 || $request->shuttle == 2) {
                        if ($tourmeta->passanger >= 2 && $tourmeta->passanger <= 7) {
                            $shuttle = 250000;
                        } elseif ($tourmeta->passanger >= 8 && $tourmeta->passanger <= 13) {
                            $shuttle = 500000;
                        }
                    } elseif ($request->shuttle == 3) {
                        if ($tourmeta->passanger >= 2 && $tourmeta->passanger <= 7) {
                            $shuttle = 500000;
                        } elseif ($tourmeta->passanger >= 8 && $tourmeta->passanger <= 13) {
                            $shuttle = 1000000;
                        }
                    }
                }

                $price = $tourmeta->price * $tourmeta->passanger;
                $price_total = $price + $shuttle + $unique_code;

                $formInput['price_total'] = $price_total;
                $formInput['expired'] = Carbon::now()->addHours(6);

                $booking = $tour->bookings()->create($formInput);

                Mail::to($booking->email)->send(new BookingSucceeded($booking));

                return redirect()->route('user.bookings.review', $booking->id)->with('status', 'Anda berhasil memesan paket wisata!');
            }
        }

        return back()->with('error', 'Ada kesalahan!');
    }

    public function review($id) {
        $user = Auth::user();
        $booking = Booking::find($id);

        if ($user->id == $booking->user->id) {
            return view('user.bookings.review', compact('booking'));
        } else {
            return redirect('/');
        }
    }

    public function payment($id) {
        $user = Auth::user();
        $booking = Booking::find($id);

        if ($user->id == $booking->user->id) {
            return view('user.bookings.payment', compact('booking'));
        } else {
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        $agent = new Agent();
        $user = Auth::user();
        $booking = Booking::find($id);
        if ($user->id = $booking->user_id || $user->admin = 1) {
            $pdf = App::make('dompdf.wrapper');
            $pdf->setPaper('A4', 'landscape');
            $pdf = PDF::loadView('user.bookings.print', compact('booking'));
            if ($agent->isMobile()) {
                return $pdf->download('Invoice LS-' . $booking->id . '.pdf');
            } else {
                return $pdf->stream('Invoice LS-' . $booking->id . '.pdf');
            }
        } else {
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);

        /* Confirmation */
        if ($request->confirmation != null) {
            $booking->confirmation = $request->confirmation;
            $booking->save();

            if ($request->confirmation == 0) {
                Mail::to($booking->user->email)->send(new ConfirmationRejected($booking));
                return redirect()->route('admin.bookings.index')->with('status', 'Konfirmasi ditolak!');

            } else {
                Mail::to($booking->user->email)->send(new ConfirmationAccepted($booking));
                return redirect()->route('admin.bookings.index')->with('status', 'Konfirmasi telah diterima!');
            }
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookings = Booking::find($id);

        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('status', 'Booking telah dihapus!');
    }

    public function toursmeta($id) {
        $tourmeta = ToursMeta::find($id);
        $messages;

        if ($tourmeta->passanger >= 2 && $tourmeta->passanger <= 7) {
          $messages = array(
                  array(
                      "id" => 0,
                      "message" => "Tanpa Antar Jemput (Rp 0)"
                  ),
                  array(
                      "id" => 1,
                      "message" => "Jemput Juanda (Rp 250.000,00)"
                  ),
                  array(
                      "id" => 2,
                      "message" => "Antar Juanda (Rp 250.000,00)"
                  ),
                  array(
                      "id" => 3,
                      "message" => "Antar Jemput Juanda (Rp 500.000,00)"
                  )
                );
        } elseif ($tourmeta->passanger >= 8 && $tourmeta->passanger <= 13) {
          $messages = array(
                  array(
                      "id" => 0,
                      "message" => "Tanpa Antar Jemput (Rp 0)"
                  ),
                  array(
                      "id" => 1,
                      "message" => "Jemput Juanda (Rp 500.000,00)"
                  ),
                  array(
                      "id" => 2,
                      "message" => "Antar Juanda (Rp 500.000,00)"
                  ),
                  array(
                      "id" => 3,
                      "message" => "Antar Jemput Juanda (Rp 1.000.000,00)"
                  )
                );
        } else {
          $messages = array(
                  array(
                      "id" => 0,
                      "message" => "Tanpa Antar Jemput (Rp 0)"
                  )
                );
        }

        return response()->json($messages);
    }
}
