@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Edit Product</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price ($)</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" required step="0.01">
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-success">Update Product</button>
            </div>
        </form>
    </div>
</div>
@endsection
