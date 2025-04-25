<div>
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Liste des Pointages</h2>
    <a href="{{ route('pointages.create') }}" class="btn btn-primary mb-3">+ Nouveau Pointage</a>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Commande</th>
                <th>Date</th>
                <th>Heure</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pointages as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->user->nom }} {{ $p->user->prenom }}</td>
                <td>{{ $p->commande->code_barre }}</td>
                <td>{{ $p->date }}</td>
                <td>{{ $p->heure }}</td>
                <td class="text-end">
                    <a href="{{ route('pointages.edit', $p) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ route('pointages.destroy', $p) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
                    </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</div>
