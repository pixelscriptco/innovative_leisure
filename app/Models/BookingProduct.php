<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingProduct extends Model
{
    protected $fillable = ['booking_id', 'product_id', 'product_quantity', 'unit_price', 'total_amount', 'additional_notes'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
