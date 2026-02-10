<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class ProductService
{
    protected string $key = 'frontend_products_active';

    protected $ttl;

    public function __construct()
    {
        $this->ttl = now()->addWeeks(4);
    }

    public function getActiveProducts()
    {
        return Cache::remember($this->key, $this->ttl, function () {
            return Product::where('is_active', 1)->latest()->get();
        });
    }
}
