@extends('admin.products.adminmaster')

@section('content')
<div class="container">
    <h1>All Products</h1>
    <a href="{{ route('product.create') }}" class="add-product">Add New Product</a>

    <table>
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
                    <td class="actions">
                        <a href="{{ route('product.edit', $product->id) }}" class="edit">Edit</a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    