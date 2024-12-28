<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();  // Retrieve all brands
        return view('admin.products.create', compact('brands'));

        
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
        {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'price' => 'required|numeric|max:9999',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $picturePath = null;
        if ($request->hasFile('picture')) {
            // Store in public/images/products directory and save the path
            $picturePath = $request->file('picture')->store('images/products', 'public');
        }

        Product::create([
            'product_name' => $validatedData['product_name'],
            'brand_id' => $validatedData['brand_id'],
            'price' => $validatedData['price'],
            'picture' => $picturePath, // Store the path of the image
        ]);

    return redirect()->route('product.index')->with('success', 'Product added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'brand' => 'required',
            // 'picture' => 'nullable|url',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
