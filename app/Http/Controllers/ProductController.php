<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products with brands
        
        $products = Product::with('brand')->get();

        return view('products', compact('products'));
    }
}
