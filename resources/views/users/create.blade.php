<div>
@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2 class="mb-4">Créer un Utilisateur</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" value="{{ old('prenom') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Code-barre</label>
            <input type="text" name="code_barre" class="form-control" value="{{ old('code_barre') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Rôle (via état)</label>
            <select name="etat_id" class="form-control" required>
                <option value="">-- Sélectionner un rôle --</option>
                @foreach($etats as $etat)
                    <option value="{{ $etat->id }}" {{ old('etat_id') == $etat->id ? 'selected' : '' }}>
                        {{ $etat->role }} ({{ $etat->etat }})
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
</div>