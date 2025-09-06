@extends('layouts.app')

@section('content')
  <h1 class="h3 mb-3">Edit Client</h1>

  <form action="{{ route('clients.update', $client) }}" method="POST" class="card p-3 shadow-sm">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control" value="{{ old('name', $client->name) }}" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Email (optional)</label>
      <input type="email" name="email" class="form-control" value="{{ old('email', $client->email) }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Phone (optional)</label>
      <input type="text" name="phone" class="form-control" value="{{ old('phone', $client->phone) }}">
    </div>

    <div class="d-flex gap-2">
      <button class="btn btn-primary" type="submit">Update</button>
      <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary">Back</a>
    </div>
  </form>
@endsection
