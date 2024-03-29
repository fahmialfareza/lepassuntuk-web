<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\BookingObserver;
use App\Booking;
use App\Observers\RequestBookingObserver;
use App\RequestBooking;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Booking::observe(BookingObserver::class);
        RequestBooking::observe(RequestBookingObserver::class);
    }
}
