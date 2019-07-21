<?php

namespace App\Observers;

use App\Notifications\NewBooking;
use App\Booking;
use App\User;

class BookingObserver {
    public function created(Booking $booking) {
        $user = $booking->user;
        $admins = User::where('admin', 1)->get();
        foreach ($admins as $admin) {
            $admin->notify(new NewBooking($booking, $user));
        }
    }
}
