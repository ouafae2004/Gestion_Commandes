<div>
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
@endsection</div>
