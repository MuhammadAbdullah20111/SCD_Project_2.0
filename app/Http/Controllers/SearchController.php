<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;  // Use the Product model

class SearchController extends Controller
{
    public function searchProducts(Request $request)
{
    dd($request->all());

    $query = $request->input('q', '');
    $brand = $request->input('brand', 'all');

    $products = Product::query();

    if (!empty($query)) {
        $products->where('product_name', 'like', '%' . $query . '%');
    }

    if ($brand !== 'all') {
        $products->whereHas('brand', function ($q) use ($brand) {
            $q->where('name', '=', $brand);
        });
    }

    $products = $products->get()->map(function ($product) {
        return [
            'id' => $product->id,
            'product_name' => $product->product_name,
            'price' => $product->price,
            'picture' => $product->picture ? asset('storage/' . $product->picture) : asset('images/default.jpg'),
            'brand' => isset($product->brand) ? strtolower($product->brand->name) : 'unknown',
        ];
    });

    return response()->json(['products' => $products]);
}

public function filter(Request $request)
{
    $query = $request->get('q', '');
    $brand = $request->get('brand', 'all');

    $products = Product::when($query, function ($queryBuilder) use ($query) {
        return $queryBuilder->where('product_name', 'like', "%$query%");
    })->when($brand !== 'all', function ($queryBuilder) use ($brand) {
        return $queryBuilder->whereHas('brand', function ($q) use ($brand) {
            $q->where('name', $brand);
        });
    })->get();

    $html = view('partials.product_grid', compact('products'))->render();

    return response()->json(['html' => $html]);
}

    
}
