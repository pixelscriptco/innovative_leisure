<?php

namespace App\Http\Controllers;

use App\Mail\SendBooking;
use App\Models\Booking;
use App\Models\BookingProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function postInquiry(Request $request)
    {
        $cartItems = json_decode($request->cart_items, true);

        $booking = new Booking();
        $booking->full_name = $request->full_name ?? '';
        $booking->company_name = $request->company_name ?? '';
        $booking->email = $request->email ?? '';
        $booking->phone_number = $request->phone_number ?? '';
        $booking->project_type = $request->project_type ?? '';
        $booking->billing_address = $request->billing_address ?? '';
        $booking->shipping_address = $request->shipping_address ?? '';
        $booking->additional_comments = $request->additional_comments ?? '';
        $booking->save();

        if (!empty($cartItems)) {
            foreach ($cartItems as $item) {
                $product = new BookingProduct();
                $product->booking_id = $booking->id;
                $product->product_id = $item['id'];
                $product->product_quantity = $item['qty'];
                $product->unit_price = $item['price'];
                $product->total_amount = $item['qty'] * $item['price'];
                $product->save();
            }
        }
        $details = Booking::with('bookingProduct.product')->find($booking->id);
        Mail::to('jincyannageorge18@gmail.com')->send(new SendBooking($details));
        return response()->json(['message' => 'Inquiry Submitted']);
    }

}
