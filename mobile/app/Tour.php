<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Destination;
use App\ToursMeta;
use App\ToursDate;
use App\Booking;

class Tour extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function destination() {
        return $this->belongsTo(Destination::class);
    }

    public function tours_metas() {
        return $this->hasMany(ToursMeta::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function tours_dates() {
        return $this->hasMany(ToursDate::class);
    }
}
