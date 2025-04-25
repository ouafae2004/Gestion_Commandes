<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Etat;
use App\Models\Type;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = Commande::with('client', 'etat', 'type')->get();
        return view('commandes.index', compact('commandes'));
    }

    public function create()
    {
        $clients = Client::all();
        $etats = Etat::all();
        $types = Type::all();
        return view('commandes.create', compact('clients', 'etats', 'types'));
    }

    public function store(Request $request)
    {
        Commande::create($request->all());
        return redirect()->route('commandes.index');
    }

    public function show(Commande $commande)
    {
        return view('commandes.show', compact('commande'));
    }

    public function edit(Commande $commande)
    {
        $clients = Client::all();
        $etats = Etat::all();
        $types = Type::all();
        return view('commandes.edit', compact('commande', 'clients', 'etats', 'types'));
    }
    public function update(Request $request, Commande $commande)
    {
        $commande->update($request->all());
        return redirect()->route('commandes.index');
    }

    public function destroy(Commande $commande)
    {
        $commande->delete();
        return redirect()->route('commandes.index');
    }
}
