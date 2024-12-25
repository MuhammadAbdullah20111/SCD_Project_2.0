<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;  // Use the Product model

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');  // Get search query
        $brand = $request->input('brand');  // Get brand filter

        // Query the database for matching products
        $products = Product::where('product_name', 'LIKE', '%' . $query . '%')
            ->when($brand && $brand !== 'all', function ($q) use ($brand) {
                $q->whereHas('brand', function ($query) use ($brand) {
                    $query->where('name', '=', ucfirst($brand));
                });
            })
            ->get();

        // Return the search results view
        return view('search', compact('products'))
            ->with('searchQuery', $query)
            ->with('selectedBrand', $brand);
    }
}
