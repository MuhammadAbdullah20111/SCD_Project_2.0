<!-- resources/views/partials/product_grid.blade.php -->

<div class="row row-cols-1 row-cols-md-3 g-4" id="productGrid">
    @foreach ($products as $product)
    <div class="col-md-4 col-sm-6 product-card mb-4" data-brand="{{ isset($product->brand) ? strtolower($product->brand->name) : 'unknown' }}">
        <div class="card h-100 shadow-sm">
            <img src="{{ $product->picture ? asset('storage/' . $product->picture) : asset('images/') }}" class="card-img-top img-fluid" alt="{{ $product->product_name }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">${{ number_format($product->price, 2) }}</p>
                <div class="mt-auto">
                    <a href="{{ url('/product/'.$product->id) }}" class="btn btn-primary btn-sm mt-2">View Details</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
