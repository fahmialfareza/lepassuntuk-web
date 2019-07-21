<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Auth;

class NotificationController extends Controller
{
    public function get() {
        $notification = Auth::user()->unreadNotifications;
        return $notification;
    }

    public function read(Request $request) {
        $notification = Notification::find($request->id);
        $data = json_decode($notification->data);
        $message;
        if ($notification->type == "App\Notifications\NewBooking") {
            $message = "Ada pesanan baru dengan ID LS-" . $data->booking_id;
        } else if ($notification->type == "App\Notifications\NewRequestBooking") {
            $message = "Ada request pesanan baru dengan ID RLS-" . $data->request_booking_id;
        }
        Auth::user()->unreadNotifications()->find($request->id)->MarkAsRead();
        if ($notification->type == "App\Notifications\NewBooking") {
            return redirect()->route('admin.bookings.index')->with('status', $message);
        } else if ($notification->type == "App\Notifications\NewRequestBooking") {
            return redirect()->route('admin.requestbookings.index')->with('status', $message);
        }
    }
}
