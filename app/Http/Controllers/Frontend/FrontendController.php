<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use App\Services\ProjectService;

class FrontendController extends Controller
{
    protected ProjectService $projectService;

    protected ProductService $productService;

    public function __construct(ProjectService $projectService, ProductService $productService)
    {
        $this->projectService = $projectService;
        $this->productService = $productService;
    }

    protected function index()
    {
        $projects = $this->projectService->getLatestThree();

        return view('frontend.index', compact('projects'));
    }

    protected function projectList()
    {
        $projects = $this->projectService->getByCompletion();

        return view('frontend.project', compact('projects'));
    }

    protected function productList()
    {
        $products = $this->productService->getActiveProducts();

        return view('frontend.product', compact('products'));
    }

    protected function viewCart()
    {
        return view('frontend.cart');
    }
}
