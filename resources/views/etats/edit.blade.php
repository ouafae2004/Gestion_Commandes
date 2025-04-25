<div>
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Modifier l'État</h2>

    <form action="{{ route('etats.update', $etat) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">État</label>
            <input type="text" name="etat" class="form-control" value="{{ old('etat', $etat->etat) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Rôle</label>
            <select name="role" class="form-control" required>
                <option value="ramasseur" {{ $etat->role=='ramasseur'?'selected':'' }}>ramasseur</option>
                <option value="controleur" {{ $etat->role=='controleur'?'selected':'' }}>controleur</option>
                <option value="caissier" {{ $etat->role=='caissier'?'selected':'' }}>caissier</option>
                <option value="expediteur" {{ $etat->role=='expediteur'?'selected':'' }}>expediteur</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('etats.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection

</div>
