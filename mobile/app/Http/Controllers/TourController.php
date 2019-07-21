<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use Auth;
use File;
use App\Destination;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::all();

        return view('admin.tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all();

        return view('admin.tours.create', compact('destinations'));
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

        $formInput = $request->except('main_photo', 'photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'photo6', 'photo7', 'photo8', 'photo9');

        $this->validate($request, [
            'destination_id' => 'required|integer',
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'durations' => 'required|integer',
            'facilities' => 'required',
            'notes' => 'required',
            'itinerary' => 'required',
            'main_photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1000',
            'photo1' => 'required|mimes:jpg,jpeg,bmp,png|max:1000',
            'photo2' => 'required|mimes:jpg,jpeg,bmp,png|max:1000',
            'photo3' => 'required|mimes:jpg,jpeg,bmp,png|max:1000',
            'photo4' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo5' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo6' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo7' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo8' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo9' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'map' => 'required',
        ]);

        $tour = $user->tours()->create($formInput);

        /* Photo Upload */
        $mainPhoto = $request->main_photo;
        $photo1 = $request->photo1;
        $photo2 = $request->photo2;
        $photo3 = $request->photo3;
        $photo4 = $request->photo4;
        $photo5 = $request->photo5;
        $photo6 = $request->photo6;
        $photo7 = $request->photo7;
        $photo8 = $request->photo8;
        $photo9 = $request->photo9;
        $location = "photos/tours/" . $user->id . "/" . $tour->id;
        File::makeDirectory($location, 0777, true, true);
        if ($mainPhoto) {
            $mainPhotoName = $mainPhoto->getClientOriginalName();
            $mainPhoto->move($location, $mainPhotoName);
            $tour->main_photo = $mainPhotoName;
        }
        if ($photo1) {
            $photo1Name = $photo1->getClientOriginalName();
            $photo1->move($location, $photo1Name);
            $tour->photo1 = $photo1Name;
        }
        if ($photo2) {
            $photo2Name = $photo2->getClientOriginalName();
            $photo2->move($location, $photo2Name);
            $tour->photo2 = $photo2Name;
        }
        if ($photo3) {
            $photo3Name = $photo3->getClientOriginalName();
            $photo3->move($location, $photo3Name);
            $tour->photo3 = $photo3Name;
        }
        if ($photo4) {
            $photo4Name = $photo4->getClientOriginalName();
            $photo4->move($location, $photo4Name);
            $tour->photo4 = $photo4Name;
        }
        if ($photo5) {
            $photo5Name = $photo5->getClientOriginalName();
            $photo5->move($location, $photo5Name);
            $tour->photo5 = $photo5Name;
        }
        if ($photo6) {
            $photo6Name = $photo6->getClientOriginalName();
            $photo6->move($location, $photo6Name);
            $tour->photo6 = $photo6Name;
        }
        if ($photo7) {
            $photo7Name = $photo7->getClientOriginalName();
            $photo7->move($location, $photo7Name);
            $tour->photo7 = $photo7Name;
        }
        if ($photo8) {
            $photo8Name = $photo8->getClientOriginalName();
            $photo8->move($location, $photo8Name);
            $tour->photo8 = $photo8Name;
        }
        if ($photo9) {
            $photo9Name = $photo9->getClientOriginalName();
            $photo9->move($location, $photo9Name);
            $tour->photo9 = $photo9Name;
        }

        $tour->save();

        return redirect()->route('admin.tours.index')->with('status', "Berhasil menambahkan paket wisata!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_all() {
        $tours = Tour::all();

        return view('front.tours.show_all', compact('tours'));
    }

    public function show($id)
    {
        $tour = Tour::where('slug', $id)->first();

        $tour->viewed += 1;
        $tour->save();

        return view('front.tours.show', compact('tour'));
    }

    public function search(Request $request) {
        $tours = Tour::where('name', 'like', "%$request->search%")->get();

        return view('front.tours.search', compact('tours', 'request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);
        $destinations = Destination::all();

        return view('admin.tours.edit', compact('tour', 'destinations'));
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
        $tour = Tour::find($id);
        $user = Auth::user();

        $this->validate($request, [
            'destination_id' => 'required|integer',
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'durations' => 'required',
            'facilities' => 'required',
            'notes' => 'required',
            'itinerary' => 'required',
            'main_photo' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo1' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo2' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo3' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo4' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo5' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo6' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo7' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo8' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'photo9' => 'mimes:jpg,jpeg,bmp,png|max:1000',
            'map' => 'required',
        ]);

        $tour->destination_id = $request->destination_id;
        $tour->name = $request->name;
        $tour->description = $request->description;
        $tour->location = $request->location;
        $tour->durations = $request->durations;
        $tour->facilities = $request->facilities;
        $tour->notes = $request->notes;
        $tour->itinerary = $request->itinerary;
        $tour->map = $request->map;

        /* Photo Upload */
        $mainPhoto = $request->main_photo;
        $photo1 = $request->photo1;
        $photo2 = $request->photo2;
        $photo3 = $request->photo3;
        $photo4 = $request->photo4;
        $photo5 = $request->photo5;
        $photo6 = $request->photo6;
        $photo7 = $request->photo7;
        $photo8 = $request->photo8;
        $photo9 = $request->photo9;
        $location = "photos/tours/" . $user->id . "/" . $tour->id;
        File::makeDirectory($location, 0777, true, true);
        if ($mainPhoto) {
            $mainPhotoName = $mainPhoto->getClientOriginalName();
            $mainPhoto->move($location, $mainPhotoName);
            $deleteMainPhoto = $location . "/" . $tour->main_photo;
            File::delete($deleteMainPhoto);
            $tour->main_photo = $mainPhotoName;
        }
        if ($photo1) {
            $photo1Name = $photo1->getClientOriginalName();
            $photo1->move($location, $photo1Name);
            $deletePhoto1 = $location . "/" . $tour->photo1;
            File::delete($deletePhoto1);
            $tour->photo1 = $photo1Name;
        }
        if ($photo2) {
            $photo2Name = $photo2->getClientOriginalName();
            $photo2->move($location, $photo2Name);
            $deletePhoto2 = $location . "/" . $tour->photo2;
            File::delete($deletePhoto2);
            $tour->photo2 = $photo2Name;
        }
        if ($photo3) {
            $photo3Name = $photo3->getClientOriginalName();
            $photo3->move($location, $photo3Name);
            $deletePhoto3 = $location . "/" . $tour->photo3;
            File::delete($deletePhoto3);
            $tour->photo3 = $photo3Name;
        }
        if ($photo4) {
            $photo4Name = $photo4->getClientOriginalName();
            $photo4->move($location, $photo4Name);
            $deletePhoto4 = $location . "/" . $tour->photo4;
            File::delete($deletePhoto4);
            $tour->photo4 = $photo4Name;
        }
        if ($photo5) {
            $photo5Name = $photo5->getClientOriginalName();
            $photo5->move($location, $photo5Name);
            $deletePhoto5 = $location . "/" . $tour->photo5;
            File::delete($deletePhoto5);
            $tour->photo5 = $photo5Name;
        }
        if ($photo6) {
            $photo6Name = $photo6->getClientOriginalName();
            $photo6->move($location, $photo6Name);
            $deletePhoto6 = $location . "/" . $tour->photo6;
            File::delete($deletePhoto6);
            $tour->photo6 = $photo6Name;
        }
        if ($photo7) {
            $photo7Name = $photo7->getClientOriginalName();
            $photo7->move($location, $photo7Name);
            $deletePhoto7 = $location . "/" . $tour->photo7;
            File::delete($deletePhoto7);
            $tour->photo7 = $photo7Name;
        }
        if ($photo8) {
            $photo8Name = $photo8->getClientOriginalName();
            $photo8->move($location, $photo8Name);
            $deletePhoto8 = $location . "/" . $tour->photo8;
            File::delete($deletePhoto8);
            $tour->photo8 = $photo8Name;
        }
        if ($photo9) {
            $photo9Name = $photo9->getClientOriginalName();
            $photo9->move($location, $photo9Name);
            $deletePhoto9 = $location . "/" . $tour->photo9;
            File::delete($deletePhoto9);
            $tour->photo9 = $photo9Name;
        }

        $tour->save();

        return redirect()->route('admin.tours.index')->with('status', "Berhasil mengupdate paket wisata!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);

        $tour->delete();

        return redirect()->route('admin.tours.index')->with('status', 'Berhasil menghapus paket wisata');
    }
}
