<div>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Modifier la Commande</h1>

    <form action="{{ route('commandes.update', $commande->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Code Barre</label>
            <input type="text" name="code_barre" class="form-control" value="{{ old('code_barre', $commande->code_barre) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Num Commande</label>
            <input type="text" name="num_commande" class="form-control" value="{{ old('num_commande', $commande->num_commande) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $commande->date) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Sexe</label>
            <select name="sexe" class="form-control" required>
                <option value="homme" {{ $commande->sexe == 'homme' ? 'selected' : '' }}>Homme</option>
                <option value="femme" {{ $commande->sexe == 'femme' ? 'selected' : '' }}>Femme</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Type Fourniture</label>
            <select name="type_id" class="form-control" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $commande->type_id == $type->id ? 'selected' : '' }}>{{ $type->type_fornit }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Client</label>
            <select name="client_id" class="form-control" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ $commande->client_id == $client->id ? 'selected' : '' }}>{{ $client->nom }} {{ $client->prenom }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">État</label>
            <select name="etat_id" class="form-control" required>
                @foreach($etats as $etat)
                    <option value="{{ $etat->id }}" {{ $commande->etat_id == $etat->id ? 'selected' : '' }}>{{ $etat->etat }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Montant</label>
            <input type="number" name="montant" class="form-control" value="{{ old('montant', $commande->montant) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('commandes.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
</div>
