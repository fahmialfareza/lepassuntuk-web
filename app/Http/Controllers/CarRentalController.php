<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarRental;
use Auth;
use File;

class CarRentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = CarRental::all();

        return view('admin.carrentals.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carrentals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $formInput = $request->except('photo');

        $this->validate($request, [
            'brand' => 'required',
            'type' => 'required',
            'driver' => 'required|boolean',
            'fuel' => 'required|boolean',
            'price_12_hours' => 'numeric|min:10000|max:9999999',
            'price_full_day' => 'required|numeric|min:10000|max:9999999',
            'extra_charge' => 'required|numeric|min:10000|max:9999999',
            'photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1000',
        ]);

        $car = $user->carrentals()->create($formInput);

        /* Photo Upload */
        $photo = $request->photo;
        $location = "photos/carrentals/" . $user->id . "/" . $car->id;
        File::makeDirectory($location, 0777, true, true);
        if ($photo) {
            $photoName = $photo->getClientOriginalName();
            $photo->move($location, $photoName);
            $car->photo = $photoName;
            $car->save();
        }

        return redirect()->route('admin.carrentals.index')->with('status', "Berhasil menambahkan mobil baru!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cars = CarRental::all();

        return view('front.carrentals.show', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = CarRental::find($id);

        return view('admin.carrentals.edit', compact('car'));
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
        $car = CarRental::find($id);

        $this->validate($request, [
            'brand' => 'required',
            'type' => 'required',
            'driver' => 'required|boolean',
            'fuel' => 'required|boolean',
            'price_12_hours' => 'numeric|min:10000|max:9999999',
            'price_full_day' => 'required|numeric|min:10000|max:9999999',
            'extra_charge' => 'required|numeric|min:10000|max:9999999',
            'photo' => 'mimes:jpg,jpeg,bmp,png|max:1000',
        ]);

        $car->brand = $request->brand;
        $car->type = $request->type;
        $car->driver = $request->driver;
        $car->fuel = $request->fuel;
        $car->price_12_hours = $request->price_12_hours;
        $car->price_full_day = $request->price_full_day;
        $car->extra_charge = $request->extra_charge;

        /* Photo Upload */
        $photo = $request->photo;
        $location = "photos/cars/" . $car->user_id . "/" . $car->id;
        File::makeDirectory($location, 0777, true, true);
        if ($photo) {
            $photoName = $photo->getClientOriginalName();
            $photo->move($location, $photoName);
            $deletePhoto = $location . "/" . $car->photo;
            File::delete($deletePhoto);
            $car->photo = $photoName;
        }

        $car->save();

        return redirect()->route('admin.carrentals.index')->with('status', 'Berhasil mengupdate mobil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = CarRental::find($id);

        $car->delete();

        return back()->with('status', 'Berhasil menghapus mobil!');
    }
}
