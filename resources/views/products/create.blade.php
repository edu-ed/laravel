@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Add New Product</h2>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter product name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="4" placeholder="Enter product description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price ($)</label>
                <input type="number" id="price" name="price" class="form-control" placeholder="Enter product price" required step="0.01">
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>
        </form>
    </div>
</div>
@endsection
