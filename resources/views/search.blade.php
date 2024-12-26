  <div class="container mt-5">
        <h3>Search Results</h3>
        <form action="{{ route('products.search') }}" method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="q" id="searchInput" class="form-control" 
                           placeholder="Search by phone name..." value="{{ old('searchQuery', $searchQuery ?? '') }}">
                </div>
                <div class="col-md-4">
                    <select name="brand" id="brandFilter" class="form-control">
                        <option value="all" {{ $selectedBrand == 'all' ? 'selected' : '' }}>All Brands</option>
                        @foreach($brands as $brand)
                            <option value="{{ strtolower($brand->name) }}" {{ $selectedBrand == strtolower($brand->name) ? 'selected' : '' }}>{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <div class="row row-cols-1 row-cols-md-3 g-4" id="searchResultsGrid">
            @if(count($products) > 0)
                @foreach ($products as $product)
                    <div class="col-md-4 col-sm-6 product-card mb-4" data-brand="{{ isset($product->brand) ? strtolower($product->brand->name) : 'unknown' }}">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ $product->picture ? asset('storage/' . $product->picture) : asset('images/placeholder.png') }}" class="card-img-top img-fluid" alt="{{ $product->product_name }}">
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
            @else
                <p>No products found for your search.</p>
            @endif
        </div>
    </div>