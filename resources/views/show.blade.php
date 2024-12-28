@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->picture ? asset('storage/' . $product->picture) : asset('images/default.jpg') }}" 
                 alt="{{ $product->product_name }}" 
                 class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->product_name }}</h1>
            <p class="text-muted">Brand: {{ optional($product->brand)->name ?? 'Unknown' }}</p>
            <h2 class="text-primary">${{ number_format($product->price, 2) }}</h2>

            {{-- General Description --}}
            <p class="mt-3">
            {{ 
    $product->description ?? "Introducing the amazing {$product->product_name} by " . 
    ($product->brand->name ?? 'a trusted brand') . 
    ". Designed with exceptional quality and performance, this product is perfect for fulfilling your needs and delivering a great user experience." 
            }}
            </p>
            
            <div class="d-flex align-items-center mt-4">
                <form action="#" method="POST">
                    @csrf
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1" class="form-control d-inline-block w-25 mx-3">
                    <button type="submit" class="btn btn-success btn-lg">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h3>Product Specifications</h3>
                    <ul class="list-unstyled">
                    @foreach ($specifications as $key => $value)
                    <li><strong>{{ $key }}:</strong> {{ $value }}</li>
                  @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
