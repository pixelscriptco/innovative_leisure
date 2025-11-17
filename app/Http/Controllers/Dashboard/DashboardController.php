<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected function index()
    {
        return view('admin.dashboard.dashboard');
    }
}
