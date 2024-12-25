<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id(); 
        $table->string('product_name');
        $table->decimal('price', 8, 2);
        $table->unsignedBigInteger('brand_id'); // Foreign key to brands table
        $table->string('picture')->nullable(); // To store image file paths
        $table->timestamps();

        // Add foreign key constraint
        $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
