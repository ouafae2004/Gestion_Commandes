<?php

namespace App\Http\Controllers;

use App\Models\Pointage; 
use App\Models\User;
use App\Models\Commande;
use Illuminate\Http\Request;

class PointageController extends Controller
{
    public function index()
    {
        $pointages = Pointage::with('user', 'commande')->get();
        return view('pointages.index', compact('pointages'));
    }

    public function create()
    {
        $users = User::all();
        $commandes = Commande::all();
        return view('pointages.create', compact('users', 'commandes'));
    }

    public function store(Request $request)
    {
        Pointage::create($request->all());
        return redirect()->route('pointages.index');
    }

    public function show(Pointage $pointage)
    {
        return view('pointages.show', compact('pointage'));
    }

    public function edit(Pointage $pointage)
    {
        $users = User::all();
        $commandes = Commande::all();
        return view('pointages.edit', compact('pointage', 'users', 'commandes'));
    }

    public function update(Request $request, Pointage $pointage)
    {
        $pointage->update($request->all());
        return redirect()->route('pointages.index');
    }
    public function destroy(Pointage $pointage)
    {
        $pointage->delete();
        return redirect()->route('pointages.index');
    }
}
