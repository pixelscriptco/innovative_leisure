<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Auth;

class DashboardController extends Controller
{
    protected function index()
    {
        $totalBookingCount = Booking::count();
        $totalBookingToday = Booking::whereRaw('DATE(created_at) = ?', [date('Y-m-d')])->count();
        return view('admin.dashboard.dashboard', compact('totalBookingCount', 'totalBookingToday'));
    }

    public function logout()
    {
        Auth::logout();
        return true;
    }
}
