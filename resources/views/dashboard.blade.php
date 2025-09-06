@extends('layouts.app')

@section('content')
  <div class="d-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0">Dashboard</h1>
    <div>
      <a href="{{ route('clients.create') }}" class="btn btn-primary">+ Add Client</a>
      {{-- Add more quick actions later --}}
      {{-- <a href="{{ route('products.create') }}" class="btn btn-outline-primary">+ Add Product</a> --}}
      {{-- <a href="{{ route('invoices.create') }}" class="btn btn-success">+ Create Invoice</a> --}}
    </div>
  </div>

  <div class="row g-3">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Clients</h5>
          <p class="display-6 mb-0">{{ $stats['clients'] }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Products</h5>
          <p class="display-6 mb-0">{{ $stats['products'] }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Invoices</h5>
          <p class="display-6 mb-0">{{ $stats['invoices'] }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
