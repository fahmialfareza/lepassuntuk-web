<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\BookingSucceeded;
use App\Mail\BookingNotAvailable;
use App\Mail\ConfirmationRejected;
use App\Booking;
use App\Tour;
use App\Destination;
use App\CarRental;
use App\Villa;

class FrontController extends Controller
{
  public function index() {
      $tours = Tour::paginate(6);
      $destinations = Destination::paginate(6);
      $car = CarRental::paginate(1)->first();
      $destination1 = Destination::orderBy('id', 'desc')->first();
      $villa = Villa::paginate(1)->first();

      return view('front.index', compact('tours', 'destinations', 'car', 'destination1', 'villa'));
  }
    
    

    public function policy() {
        return view('front.policy');
    }

    public function requirement() {
        return view('front.requirement');
    }
    
    public function faq() {
        return view('front.faq');
    }

    public function aboutus() {
        return view('front.aboutus');
    }

    public function contact() {
        return view('front.contact');
    }

    public function email() {
        $booking = Booking::find(12345);

        // Mail::to('fahmialfareza97@gmail.com')->send(new ConfirmationRejected($booking));

        return view('emails.bookings.confirmationrejected', compact('booking'));
    }
}
