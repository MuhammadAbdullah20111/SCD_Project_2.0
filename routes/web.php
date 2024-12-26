<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;

// Route to handle AJAX search
Route::get('/search-products', [SearchController::class, 'searchProducts']);
Route::get('/products/filter', [SearchController::class, 'filter'])->name('products.filter');


Route::get('/products/search', [SearchController::class, 'search'])->name('products.search');
Route::get('/search', [SearchController::class, 'search'])->name('products.search');

Route::get('/products', [ProductController::class, 'products']);
Route::resource('product', ProductController::class);
Route::resource('product',AdminController::class);

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/login', [PageController::class, 'login']);

Route::get('/register', [PageController::class, 'register']);
Route::get('/products', [PageController::class, 'data'])->name('products.data');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
