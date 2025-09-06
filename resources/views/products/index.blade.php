@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <h1 class="h3 mb-0">Products</h1>
  <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add Product</a>
</div>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($products->count())
  <div class="table-responsive">
    <table class="table table-striped align-middle">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Price</th>
          <th style="width:180px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
              <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Delete this product?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{ $products->links() }}
@else
  <div class="alert alert-info">
    No products yet. <a href="{{ route('products.create') }}">Add the first one</a>.
  </div>
@endif
@endsection
