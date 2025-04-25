@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-gradient-primary text-white py-3">
                    <h3 class="mb-0"><i class="fas fa-user-plus me-2"></i>Nouveau Client</h3>
                </div>
                
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('clients.store') }}" class="needs-validation" novalidate>
                        @csrf

                        <div class="row g-4">
                            <!-- Nom -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" 
                                           id="nom" name="nom" placeholder=" " 
                                           value="{{ old('nom') }}" required>
                                    <label for="nom">Nom <span class="text-danger">*</span></label>
                                    @error('nom')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Prénom -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" 
                                           id="prenom" name="prenom" placeholder=" "
                                           value="{{ old('prenom') }}" required>
                                    <label for="prenom">Prénom <span class="text-danger">*</span></label>
                                    @error('prenom')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Adresse -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('adresse') is-invalid @enderror" 
                                           id="adresse" name="adresse" placeholder=" "
                                           value="{{ old('adresse') }}">
                                    <label for="adresse">Adresse</label>
                                    @error('adresse')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Téléphone -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control @error('tel') is-invalid @enderror" 
                                           id="tel" name="tel" placeholder=" "
                                           value="{{ old('tel') }}">
                                    <label for="tel">Téléphone</label>
                                    @error('tel')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" name="email" placeholder=" "
                                           value="{{ old('email') }}">
                                    <label for="email">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Boutons -->
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg px-4 me-2">
                                    <i class="fas fa-save me-2"></i>Enregistrer
                                </button>
                                <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary btn-lg">
                                    <i class="fas fa-arrow-left me-2"></i>Retour
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection