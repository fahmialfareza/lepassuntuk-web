<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tour;
use App\ToursMeta;
use App\User;

class Booking extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function tour() {
        return $this->belongsTo(Tour::class);
    }

    public function tours_meta() {
        return $this->belongsTo(ToursMeta::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
