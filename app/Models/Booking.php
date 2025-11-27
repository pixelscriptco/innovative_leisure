<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function bookingProduct()
    {
        return $this->hasMany(Bookingproduct::class);
    }
}
