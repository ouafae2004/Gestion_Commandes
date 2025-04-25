<div>
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Modifier le Pointage</h2>

    <form action="{{ route('pointages.update', $pointage) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Utilisateur</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $pointage->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->nom }} {{ $user->prenom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Commande</label>
            <select name="commande_id" class="form-control" required>
                @foreach($commandes as $commande)
                    <option value="{{ $commande->id }}" {{ $pointage->commande_id == $commande->id ? 'selected' : '' }}>
                        {{ $commande->code_barre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" value="{{ $pointage->date }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Heure</label>
            <input type="time" name="heure" class="form-control" value="{{ $pointage->heure }}" required>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('pointages.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection

</div>
