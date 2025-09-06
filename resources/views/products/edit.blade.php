@extends('layouts.app')

@section('content')
<h1 class="h3 mb-3">Edit Product</h1>

<form action="{{ route('products.update', $product) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="form-control" required>
  </div>

  <button class="btn btn-success">Update</button>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
