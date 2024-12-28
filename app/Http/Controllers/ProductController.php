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

    public function show($id)
{
    $product = Product::with(['brand'])->findOrFail($id);

    // Map specifications
    $specifications = [
        'SKU' => $product->sku ?? 'N/A',
        'Brand' => $product->brand->name ?? 'Unknown Brand',
        'Stock Availability' => $product->stock > 0 ? $product->stock . ' in stock' : 'Out of stock',
        // Add more fields if needed
    ];

    return view('show', compact('product', 'specifications'));
}

}
