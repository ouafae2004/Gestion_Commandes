<div>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Liste des Commandes</h1>
    <a href="{{ route('commandes.create') }}" class="btn btn-primary mb-3">Nouvelle Commande</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Code Barre</th>
                <th>Num Commande</th>
                <th>Date</th>
                <th>Sexe</th>
                <th>Type</th>
                <th>Client</th>
                <th>État</th>
                <th>Montant</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
                <tr>
                    <td>{{ $commande->code_barre }}</td>
                    <td>{{ $commande->num_commande }}</td>
                    <td>{{ $commande->date }}</td>
                    <td>{{ $commande->sexe }}</td>
                    <td>{{ $commande->type->type_fornit ?? '' }}</td>
                    <td>{{ $commande->client->nom }} {{ $commande->client->prenom }}</td>
                    <td>{{ $commande->etat->etat ?? '' }}</td>
                    <td>{{ $commande->montant }} DH</td>
                    <td>
                        <a href="{{ route('commandes.edit', $commande->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('commandes.destroy', $commande->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
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
