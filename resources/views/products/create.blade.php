@extends('layouts.app')

@section('content')
<h1 class="h3 mb-3">Add Product</h1>

<form action="{{ route('products.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" step="0.01" name="price" class="form-control" required>
  </div>

  <button class="btn btn-success">Save</button>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
