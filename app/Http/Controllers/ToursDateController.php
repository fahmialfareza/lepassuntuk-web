<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\ToursDate;

class ToursDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tour = Tour::find($id);
        $toursdates = $tour->tours_dates;

        return view('admin.tours.toursdate.index', compact('tour', 'toursdates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $tour = Tour::find($id);

        return view('admin.tours.toursdate.create', compact('tour'));
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

        $formInput = $request->all();

        $this->validate($request, [
            'date' => 'required|date',
        ]);

        $tour->tours_dates()->create($formInput);

        return redirect()->route('admin.toursdate.index', $tour->id)->with('status', 'Berhasil menambahkan tanggal!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toursdate = ToursDate::find($id);

        return view('admin.tours.toursdate.edit', compact('toursdate'));
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
        $toursdate = ToursDate::find($id);
        $tour = $toursdate->tour;

        $this->validate($request, [
            'date' => 'required|date',
        ]);

        $toursdate->date = $request->date;

        $toursdate->save();

        return redirect()->route('admin.toursdate.index', $tour->id)->with('status', 'Berhasil merubah tanggal!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toursdate = ToursDate::find($id);
        $tour = $toursdate->tour;

        $toursdate->delete();

        return redirect()->route('admin.toursdate.index', $tour->id)->with('status', 'Berhasil menghapus tanggal!');
    }
}
