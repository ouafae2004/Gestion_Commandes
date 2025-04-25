<div>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Liste des Types</h1>
    <a href="{{ route('types.create') }}" class="btn btn-primary mb-3">Nouveau Type</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nom du Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
                <tr>
                    <td>{{ $type->type_fornit }}</td>
                    <td>
                        <a href="{{ route('types.edit', $type->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('types.destroy', $type->id) }}" method="POST" style="display:inline;">
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


---

2. resources/views/types/create.blade.php

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Ajouter un Type</h1>

    <form action="{{ route('types.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nom du Type</label>
            <input type="text" name="type_fornit" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('types.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection


---

3. resources/views/types/edit.blade.php

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Modifier le Type</h1>

    <form action="{{ route('types.update', $type->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nom du Type</label>
            <input type="text" name="type_fornit" class="form-control" value="{{ old('type_fornit', $type->type_fornit) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('types.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
</div>
