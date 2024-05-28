<!-- create.blade.php -->
@extends('layouts2.superadmin')

@section('content')
    <div class="container">
        <h1>Create Product</h1>

        <form action="{{ route('backend.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Product Name -->
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <!-- Price -->
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <!-- Product Quantity -->
            <div class="form-group">
                <label for="product_quantity">Product Quantity</label>
                <input type="number" name="product_quantity" class="form-control" required>
            </div>

            <!-- Category -->
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" class="form-control" required>
                    <!-- Populate categories from the database -->
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Brand -->
            <div class="form-group">
                <label for="brand_id">Brand</label>
                <select name="brand_id" class="form-control" required>
                    <!-- Populate brands from the database -->
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Material -->
            <div class="form-group">
                <label for="material">Material</label>
                <input type="text" name="material" class="form-control">
            </div>

            <!-- Product Image -->
            <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" name="product_image" class="form-control-file">
            </div>

            <!-- Status -->
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
