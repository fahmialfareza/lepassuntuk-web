<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Destination;
use App\Tour;
use App\Booking;
use App\SocialProvider;
use App\CarRental;
use App\ToursMeta;
use App\RequestBooking;
use App\Villa;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function socialProviders() {
        return $this->hasOne(SocialProvider::class);
    }

    public function destinations() {
        return $this->hasMany(Destination::class);
    }

    public function tours() {
        return $this->hasMany(Tour::class);
    }

    public function bookings() {
        return $this->hasMany(Boooking::class);
    }

    public function carrentals() {
        return $this->hasMany(CarRental::class);
    }

    public function tours_metas() {
        return $this->hasMany(ToursMeta::class);
    }

    public function request_bookings() {
        return $this->hasMany(RequestBooking::class);
    }

    public function villas() {
        return $this->hasMany(Villa::class);
    }
}
