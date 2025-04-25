@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Liste des clients</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Nouveau client
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->prenom }}</td>
                    <td>{{ $client->adresse }}</td>
                    <td>{{ $client->tel }}</td>
                    <td>{{ $client->email }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('clients.edit', $client) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Modifier
                        </a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client?')">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection