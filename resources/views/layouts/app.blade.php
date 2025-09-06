<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Invoice System</title>
  <!-- Bootstrap CDN for quick styling -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('dashboard') }}">InvoiceSystem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('clients.*') ? 'active' : '' }}" 
             href="{{ route('clients.index') }}">
            Clients
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" 
             href="{{ route('products.index') }}">
            Products
          </a>
        </li>
        {{-- Later we’ll enable Invoices --}}
        {{-- <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('invoices.*') ? 'active' : '' }}" 
             href="{{ route('invoices.index') }}">
            Invoices
          </a>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>

<main class="container py-4">
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $err)
          <li>{{ $err }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
