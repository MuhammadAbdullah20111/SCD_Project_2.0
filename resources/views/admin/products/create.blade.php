@extends('admin.products.adminmaster')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Add New Product</h1>

    <!-- Displaying Error Messages -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Product Name Field -->
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" name="product_name" 
                   class="form-control @error('product_name') is-invalid @enderror" 
                   value="{{ old('product_name') }}" required>
            @error('product_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Brand Field -->
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" name="brand" 
                   class="form-control @error('brand') is-invalid @enderror" 
                   value="{{ old('brand') }}" required>
            @error('brand')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price Field -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" 
                   class="form-control @error('price') is-invalid @enderror" 
                   value="{{ old('price') }}" required>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Product Picture Field -->
        <div class="mb-3">
            <label for="picture" class="form-label">Product Picture</label>
            <input type="file" name="picture" 
                   class="form-control @error('picture') is-invalid @enderror" 
                   accept="image/*">
            @error('picture')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection
