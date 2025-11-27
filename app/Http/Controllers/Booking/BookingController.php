<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BookingController extends Controller
{
    protected function list()
    {
        if(hasReadAccess(5)) {
            return view('admin.booking.list');
        }
        return redirect()->route('dashboard');
    }

    protected function listDT()
    {
        $products = Booking::with('bookingProduct.product')->withSum('bookingProduct as total_amount', 'total_amount');
        return DataTables::eloquent($products)
            ->setRowAttr(['data-id' => '{{$id}}'])
            ->addIndexColumn()
            ->addColumn('read_access', '{{hasReadAccess(5)}}')
            ->addColumn('write_access', '{{hasWriteAccess(5)}}')
            ->addColumn('delete_access', '{{hasDeleteAccess(5)}}')
            ->addColumn('role', '{{role()}}')
            ->toJson();
    }
}
