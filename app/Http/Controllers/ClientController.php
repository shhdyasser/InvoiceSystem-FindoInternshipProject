<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Show all clients
    public function index()
    {
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients'));
    }

    // Show form to add new client
    public function create()
    {
        return view('clients.create');
    }

    // Store new client
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:clients',
            'phone'   => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')
                         ->with('success', 'Client added successfully!');
    }

    // Show edit form
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    // Update client
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:clients,email,' . $client->id,
            'phone'   => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index')
                         ->with('success', 'Client updated successfully!');
    }

    // Delete client
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')
                         ->with('success', 'Client deleted successfully!');
    }
}
