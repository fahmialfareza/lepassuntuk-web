<?php

namespace App\Observers;

use App\Notifications\NewRequestBooking;
use App\RequestBooking;
use App\User;

class RequestBookingObserver {
    public function created(RequestBooking $requestBooking) {
        $user = $requestBooking->user;
        $admins = User::where('admin', 1)->get();
        foreach ($admins as $admin) {
            $admin->notify(new NewRequestBooking($requestBooking, $user));
        }
    }
}
