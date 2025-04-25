<div>
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Créer un Pointage</h2>

    <form action="{{ route('pointages.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Utilisateur</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nom }} {{ $user->prenom }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Commande</label>
            <select name="commande_id" class="form-control" required>
                @foreach($commandes as $commande)
                    <option value="{{ $commande->id }}">{{ $commande->code_barre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Heure</label>
            <input type="time" name="heure" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('pointages.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection

</div>
