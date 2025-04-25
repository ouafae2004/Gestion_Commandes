<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }
    
    public function create() {
        return view('clients.create');
    }
    
    public function store(Request $request) {
        $data = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'adresse' => 'nullable|string',
            'tel' => 'nullable|string',
            'email' => 'nullable|email',
        ]);
        Client::create($data);
        return redirect()->route('clients.index');
    }
    
    public function edit(Client $client) {
        return view('clients.edit', compact('client'));
    }
    
    public function update(Request $request, Client $client) {
        $data = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'adresse' => 'nullable|string',
            'tel' => 'nullable|string',
            'email' => 'nullable|email',
        ]);$client->update($data);
        return redirect()->route('clients.index');
    }
    
    public function destroy(Client $client) {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
