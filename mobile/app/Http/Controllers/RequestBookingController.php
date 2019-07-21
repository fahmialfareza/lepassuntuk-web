<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestBooking;
use Auth;
use Carbon\Carbon;

class RequestBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requestBookings = RequestBooking::all()->sortByDesc('id');

        return view('admin.requestbookings.index', compact('requestBookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.requestbookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('depart', 'return');

        $request->depart = Carbon::createFromFormat('m/d/Y', $request->depart);
        $formInput['depart'] = $request->depart;
        $request->return = Carbon::createFromFormat('m/d/Y', $request->return);
        $formInput['return'] = $request->return;

        $this->validate($request, [
            'name' => 'required',
            'phone_number' => 'required|numeric|digits_between:3,20',
            'email' => 'required|email',
            'depart' => 'required|date',
            'return' => 'required|date',
            'budget' => 'required|numeric|min:10000|max:99999999',
            'passanger' => 'required|integer|min:1|max:999',
            'detail' => 'required',
        ]);

        if ($request->depart <= Carbon::now()->addDays(7) || $request->return <= Carbon::now()->addDays(7)) {
            return back()->with('error', 'Minimal tanggal berangkat adalah 7 hari dari tanggal hari ini');
        }

        if ($request->depart >= $request->return) {
            return back()->with('error', 'Tanggal pulang harus lebih dari tanggal berangkat');
        }

        $user = Auth::user();

        $user->request_bookings()->create($formInput);

        return back()->with('status', 'Terimakasih atas permintaan Anda, kami akan membalas maksimal 1x24 jam.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requestBooking = RequestBooking::find($id);

        return view('admin.requestbookings.show', compact('requestBooking'));
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
        $requestBooking = RequestBooking::find($id);

        $requestBooking->replied = 1;
        $requestBooking->save();

        return back()->with('status', 'Anda telah membalas request pesanan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $requestBooking = RequestBooking::find($id);

        $requestBooking->delete();

        return back()->with('status', 'berhasil menghapus request pesanan!');
    }
}
