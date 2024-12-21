@extends('layouts.master')

@section('content')
    <h1>All Products</h1>
    <a href="{{ route('product.create') }}" class="btn btn-primary">Add New Product</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('product.destroy',$product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
