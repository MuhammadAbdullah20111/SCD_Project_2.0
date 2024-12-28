<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [ 'product_name', 'price','brand_id','picture',];

    // Relationship with Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);

         return $this->belongsTo(Brand::class, 'brand_id', 'id');

    }

}
