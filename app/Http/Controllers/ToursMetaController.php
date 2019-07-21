<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToursMeta;
use App\Tour;
use Auth;

class ToursMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tour = Tour::find($id);
        $toursmetas = $tour->tours_metas;

        return view('admin.tours.toursmeta.index', compact('tour', 'toursmetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $tour = Tour::find($id);

        return view('admin.tours.toursmeta.create', compact('tour'));
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
            'passanger' => 'required|integer|min:1|max:99',
            'price' => 'required|numeric|min:10000|max:99999999',
        ]);

        $user = Auth::user();

        $formInput['user_id'] = $user->id;

        $tour->tours_metas()->create($formInput);

        return redirect()->route('admin.toursmeta.index', $tour->id)->with('status', 'Berhasil menambahkan harga!');
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
        $tourmeta = ToursMeta::find($id);

        return view('admin.tours.toursmeta.edit', compact('tourmeta'));
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
        $tourmeta = ToursMeta::find($id);
        $tour = $tourmeta->tour;

        $this->validate($request, [
            'passanger' => 'required|integer|min:1|max:99',
            'price' => 'required|numeric|min:10000|max:99999999',
        ]);

        $tourmeta->passanger = $request->passanger;
        $tourmeta->price = $request->price;

        $tourmeta->save();

        return redirect()->route('admin.toursmeta.index', $tour->id)->with('status', 'Berhasil merubah harga!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourmeta = ToursMeta::find($id);
        $tour = $tourmeta->tour;

        $tourmeta->delete();

        return redirect()->route('admin.toursmeta.index', $tour->id)->with('status', 'Berhasil menghapus harga!');
    }
}
