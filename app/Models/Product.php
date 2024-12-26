<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['brand_id', 'product_name', 'price','picture',];

    // Relationship with Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);

         return $this->belongsTo(Brand::class, 'brand_id', 'id');

    }
    public function index()
{
    $products = Product::with('brand')->get();
    return view('your_view_name', compact('products'));
}
}
