<div>
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Créer un État</h2>

    <form action="{{ route('etats.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">État</label>
            <input type="text" name="etat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Rôle</label>
            <select name="role" class="form-control" required>
                <option value="ramasseur">ramasseur</option>
                <option value="controleur">controleur</option>
                <option value="caissier">caissier</option>
                <option value="expediteur">expediteur</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('etats.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
</div>
