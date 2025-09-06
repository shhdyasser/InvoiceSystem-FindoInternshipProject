@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0">Clients</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">+ Add Client</a>
</div>

@if($clients->count())
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th style="width:180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>
                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('clients.destroy', $client) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Delete this client?')">
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

    {{-- Pagination --}}
    {{ $clients->links() }}
@else
    <div class="alert alert-info">
        No clients yet. <a href="{{ route('clients.create') }}">Add the first one</a>.
    </div>
@endif
@endsection
