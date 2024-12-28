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
    public function create()
{
    $brands = Brand::all(); // Retrieve all brands
    return view('admin.products.create', compact('brands')); // Pass brands to the view
}

}
