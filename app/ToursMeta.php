<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tour;
use App\Booking;
use App\User;

class ToursMeta extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function tour() {
        return $this->belongsTo(Tour::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
