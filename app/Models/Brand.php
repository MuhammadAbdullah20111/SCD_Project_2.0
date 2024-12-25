<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if the table name is plural 'brands')
    protected $table = 'brands';

    // Define which attributes can be mass assigned
    protected $fillable = [
        'brand_name',
        'created_at',
        'updated_at',
    ];

    // If you're using timestamps, set this to true (Laravel does this by default)
    public $timestamps = true;

    // Define a relationship with the 'products' table
    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id'); // Assuming Product model exists and 'brand_id' is the foreign key
    }
}
