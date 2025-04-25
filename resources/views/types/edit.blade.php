<div>
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
