<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Villa;
use Auth;
use File;

class VillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villas = Villa::all();

        return view('admin.villas.index', compact('villas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.villas.create');
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
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'map' => 'required',
            'price' => 'required|numeric|min:10000|max:99999999',
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
        ]);

        $villa = $user->villas()->create($formInput);

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
        $location = "photos/villas/" . $user->id . "/" . $villa->id;
        File::makeDirectory($location, 0777, true, true);
        if ($mainPhoto) {
            $mainPhotoName = $mainPhoto->getClientOriginalName();
            $mainPhoto->move($location, $mainPhotoName);
            $villa->main_photo = $mainPhotoName;
        }
        if ($photo1) {
            $photo1Name = $photo1->getClientOriginalName();
            $photo1->move($location, $photo1Name);
            $villa->photo1 = $photo1Name;
        }
        if ($photo2) {
            $photo2Name = $photo2->getClientOriginalName();
            $photo2->move($location, $photo2Name);
            $villa->photo2 = $photo2Name;
        }
        if ($photo3) {
            $photo3Name = $photo3->getClientOriginalName();
            $photo3->move($location, $photo3Name);
            $villa->photo3 = $photo3Name;
        }
        if ($photo4) {
            $photo4Name = $photo4->getClientOriginalName();
            $photo4->move($location, $photo4Name);
            $villa->photo4 = $photo4Name;
        }
        if ($photo5) {
            $photo5Name = $photo5->getClientOriginalName();
            $photo5->move($location, $photo5Name);
            $villa->photo5 = $photo5Name;
        }
        if ($photo6) {
            $photo6Name = $photo6->getClientOriginalName();
            $photo6->move($location, $photo6Name);
            $villa->photo6 = $photo6Name;
        }
        if ($photo7) {
            $photo7Name = $photo7->getClientOriginalName();
            $photo7->move($location, $photo7Name);
            $villa->photo7 = $photo7Name;
        }
        if ($photo8) {
            $photo8Name = $photo8->getClientOriginalName();
            $photo8->move($location, $photo8Name);
            $villa->photo8 = $photo8Name;
        }
        if ($photo9) {
            $photo9Name = $photo9->getClientOriginalName();
            $photo9->move($location, $photo9Name);
            $villa->photo9 = $photo9Name;
        }

        $villa->save();

        return redirect()->route('admin.villa.index')->with('status', "Berhasil menambahkan villa!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_all() {
        $villas = Villa::all();

        return view('front.villas.show_all', compact('villas'));
    }

    public function show($id)
    {
        $villa = Villa::where('name', $id)->first();

        return view('front.villas.show', compact('villa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $villa = Villa::find($id);

        return view('admin.villas.edit', compact('villa'));
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
        $villa = Villa::find($id);
        $user = Auth::user();

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'map' => 'required',
            'price' => 'required|numeric|min:10000|max:99999999',
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
        ]);

        $villa->name = $request->name;
        $villa->description = $request->description;
        $villa->location = $request->location;
        $villa->map = $request->map;
        $villa->price = $request->price;

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
        $location = "photos/villas/" . $user->id . "/" . $villa->id;
        File::makeDirectory($location, 0777, true, true);
        if ($mainPhoto) {
            $mainPhotoName = $mainPhoto->getClientOriginalName();
            $mainPhoto->move($location, $mainPhotoName);
            $deleteMainPhoto = $location . "/" . $villa->main_photo;
            File::delete($deleteMainPhoto);
            $villa->main_photo = $mainPhotoName;
        }
        if ($photo1) {
            $photo1Name = $photo1->getClientOriginalName();
            $photo1->move($location, $photo1Name);
            $deletePhoto1 = $location . "/" . $villa->photo1;
            File::delete($deletePhoto1);
            $villa->photo1 = $photo1Name;
        }
        if ($photo2) {
            $photo2Name = $photo2->getClientOriginalName();
            $photo2->move($location, $photo2Name);
            $deletePhoto2 = $location . "/" . $villa->photo2;
            File::delete($deletePhoto2);
            $villa->photo2 = $photo2Name;
        }
        if ($photo3) {
            $photo3Name = $photo3->getClientOriginalName();
            $photo3->move($location, $photo3Name);
            $deletePhoto3 = $location . "/" . $villa->photo3;
            File::delete($deletePhoto3);
            $villa->photo3 = $photo3Name;
        }
        if ($photo4) {
            $photo4Name = $photo4->getClientOriginalName();
            $photo4->move($location, $photo4Name);
            $deletePhoto4 = $location . "/" . $villa->photo4;
            File::delete($deletePhoto4);
            $villa->photo4 = $photo4Name;
        }
        if ($photo5) {
            $photo5Name = $photo5->getClientOriginalName();
            $photo5->move($location, $photo5Name);
            $deletePhoto5 = $location . "/" . $villa->photo5;
            File::delete($deletePhoto5);
            $villa->photo5 = $photo5Name;
        }
        if ($photo6) {
            $photo6Name = $photo6->getClientOriginalName();
            $photo6->move($location, $photo6Name);
            $deletePhoto6 = $location . "/" . $villa->photo6;
            File::delete($deletePhoto6);
            $villa->photo6 = $photo6Name;
        }
        if ($photo7) {
            $photo7Name = $photo7->getClientOriginalName();
            $photo7->move($location, $photo7Name);
            $deletePhoto7 = $location . "/" . $villa->photo7;
            File::delete($deletePhoto7);
            $villa->photo7 = $photo7Name;
        }
        if ($photo8) {
            $photo8Name = $photo8->getClientOriginalName();
            $photo8->move($location, $photo8Name);
            $deletePhoto8 = $location . "/" . $villa->photo8;
            File::delete($deletePhoto8);
            $villa->photo8 = $photo8Name;
        }
        if ($photo9) {
            $photo9Name = $photo9->getClientOriginalName();
            $photo9->move($location, $photo9Name);
            $deletePhoto9 = $location . "/" . $villa->photo9;
            File::delete($deletePhoto9);
            $villa->photo9 = $photo9Name;
        }

        $villa->save();

        return redirect()->route('admin.villa.index')->with('status', "Berhasil mengupdate villa!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $villa = Villa::find($id);

        $villa->delete();

        return redirect()->route('admin.villa.index')->with('status', 'Berhasil menghapus villa!');
    }
}
