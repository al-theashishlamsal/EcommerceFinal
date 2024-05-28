<!-- update.blade.php -->
@extends('layouts2.superadmin')

@section('content')
<div class="container">
    <h1>Edit Product</h1>

    <form action="{{ route('backend.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <div class="form-group">
            <label for="product_quantity">Quantity</label>
            <input type="number" name="product_quantity" class="form-control" value="{{ $product->product_quantity }}"
                required>
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="brand_id">Brand</label>
            <select name="brand_id" id="brand_id" class="form-control" required>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" @if ($brand->id == $product->brand_id) selected @endif>
                        {{ $brand->brand_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="material">Material</label>
            <input type="text" name="material" class="form-control" value="{{ $product->material }}">
        </div>

        <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" name="product_image" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="active" @if ($product->status == 'active') selected @endif>Active</option>
                <option value="inactive" @if ($product->status == 'inactive') selected @endif>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
