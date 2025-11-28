<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Product;

class FrontendController extends Controller
{
    protected function index()
    {
        $projects = Project::latest()->limit(3)->get();
        return view('frontend.index', compact('projects'));
    }

    protected function projectList()
    {
        $projects = Project::latest('completion_date')->get();
        return view('frontend.project', compact('projects'));
    }

    protected function productList()
    {
        $products = Product::where('is_active', 1)->latest()->get();
        return view('frontend.product', compact('products'));
    }

    protected function viewCart()
    {
        return view('frontend.cart');
    }

}
