<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use App\Province;
use Auth;
use File;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::all();

        return view('admin.destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();

        return view('admin.destinations.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('photo');

        $this->validate($request, [
            'name' => 'required',
            'province_id' => 'required|integer',
            'photo' => 'required|mimes:jpeg,jpg,bmp,png|max:1000',
        ]);

        $user = Auth::user();

        $destination = $user->destinations()->create($formInput);

        /* Photo Upload */
        $photo = $request->photo;
        $location = "photos/destinations/" . $user->id . "/" . $destination->id;
        File::makeDirectory($location, 0777, true, true);
        if ($photo) {
            $photoName = $photo->getClientOriginalName();
            $photo->move($location, $photoName);
            $destination->photo = $photoName;
            $destination->save();
        }

        return redirect()->route('admin.destinations.index')->with('status', "Berhasil menambahkan destinasi baru!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_all() {
        $destinations = Destination::all();

        return view('front.destinations.show_all', compact('destinations'));
    }

    public function show($id)
    {
        $destination = Destination::find($id);
        $tours = $destination->tours;

        return view('front.destinations.show', compact('destination', 'tours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destination = Destination::find($id);
        $provinces = Province::all();

        return view('admin.destinations.edit', compact('destination', 'provinces'));
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
        $destination = Destination::find($id);

        $this->validate($request, [
            'name' => 'required',
            'province_id' => 'required|integer',
            'photo' => 'mimes:jpeg,jpg,bmp,png|max:1000',
        ]);

        $destination->name = $request->name;
        $destination->province_id = $request->province_id;

        $user = Auth::user();

        /* Photo Upload */
        $photo = $request->photo;
        $location = "photos/destinations/" . $user->id . "/" . $destination->id;
        File::makeDirectory($location, 0777, true, true);
        if ($photo) {
            $photoName = $photo->getClientOriginalName();
            $photo->move($location, $photoName);
            $deletePhoto = $location . "/" . $destination->photo;
            File::delete($deletePhoto);
            $destination->photo = $photoName;
        }

        $destination->save();

        return redirect()->route('admin.destinations.index')->with('status', 'Berhasil mengupdate destinasi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination = Destination::find($id);

        $destination->delete();

        return back()->with('status', 'Berhasil menghapus destinasi!');
    }
}
