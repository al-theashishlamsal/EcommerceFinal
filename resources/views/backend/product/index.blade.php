<!-- index.blade.php -->
@extends('layouts2.superadmin')

@section('content')
    <div class="container">
        <h1>Products</h1>

        <a href="{{ route('backend.products.create') }}" class="btn btn-primary mb-3">Create Product</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Product Quantity</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Material</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->product_quantity }}</td>
                        <td>{{ $product->category->category_name }}</td>
                        <td>{{ $product->brand->brand_name }}</td>
                        <td>{{ $product->material }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <a href="{{ route('backend.products.edit', $product->id) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <!-- You can add more actions like delete if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
