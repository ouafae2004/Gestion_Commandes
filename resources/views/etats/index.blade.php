<div>
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Liste des États</h2>
    <a href="{{ route('etats.create') }}" class="btn btn-primary mb-3">+ Nouvel État</a>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>État</th>
                <th>Rôle</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etats as $etat)
            <tr>
                <td>{{ $etat->id }}</td>
                <td>{{ $etat->etat }}</td>
                <td>{{ $etat->role }}</td>
                <td class="text-end">
                    <a href="{{ route('etats.edit', $etat) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ route('etats.destroy', $etat) }}" method="POST" class="d-inline">
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
