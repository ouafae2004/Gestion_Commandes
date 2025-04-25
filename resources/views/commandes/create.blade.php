<div>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Ajouter une Commande</h1>

    <form action="{{ route('commandes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Code Barre</label>
            <input type="text" name="code_barre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Num Commande</label>
            <input type="text" name="num_commande" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Sexe</label>
            <select name="sexe" class="form-control" required>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Type Fourniture</label>
            <select name="type_id" class="form-control" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->type_fornit }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Client</label>
            <select name="client_id" class="form-control" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->nom }} {{ $client->prenom }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">État</label>
            <select name="etat_id" class="form-control" required>
                @foreach($etats as $etat)
                    <option value="{{ $etat->id }}">{{ $etat->etat }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Montant</label>
            <input type="number" name="montant" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('commandes.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
</div>


