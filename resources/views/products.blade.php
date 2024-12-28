@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-md-4">
        <input type="text" name="q" id="searchInput" class="form-control" placeholder="Search by phone name...">
        </div>
        <div class="col-md-4">
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4" id="productGrid">
    @foreach ($products as $product)
    <div class="col-md-4 col-sm-6 product-card mb-4" data-brand="{{ isset($product->brand) ? strtolower($product->brand->name) : 'unknown' }}">
        <div class="card h-100 shadow-sm">
        <img src="{{ $product->picture ? asset('storage/' . $product->picture) : asset('images/') }}" class="card-img-top img-fluid" alt="{{ $product->product_name }}">
        <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">${{ number_format($product->price, 2) }}</p>
                <div class="mt-auto">
                    <a href="{{route('product.show', $product->id)}}" class="btn btn-primary btn-sm mt-2">View Details</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
    </div>
</div>
@endsection
