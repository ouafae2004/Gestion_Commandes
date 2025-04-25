<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use Illuminate\Http\Request;

class EtatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etats = Etat::all();
        return view('etats.index', compact('etats'));
    }

    public function create()
    {
        return view('etats.create');
    }

    public function store(Request $request)
    {
        Etat::create($request->all());
        return redirect()->route('etats.index');
    }

    public function show(Etat $etat)
    {
        return view('etats.show', compact('etat'));
    }

    public function edit(Etat $etat)
    {
        return view('etats.edit', compact('etat'));
    }

    public function update(Request $request, Etat $etat)
    {
        $etat->update($request->all());
        return redirect()->route('etats.index');
    }

    public function destroy(Etat $etat)
    {
        $etat->delete();
        return redirect()->route('etats.index');
    }
}
