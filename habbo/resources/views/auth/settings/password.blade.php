@extends('layouts.app')

@section('title', 'Mes paramètres > Mot de passe')

@section('content')
<div class="container">
    <h1 class="title-login">Mes paramètres</h1>
    <div class="row pt-4">
        <div class="col-md-6">
            <h2 class="title-mini-transform d-inline-block position-relative setting-title">Mot de passe</h1>
            @include('alerts')
            <form method="post" action="{{ route('settings.password') }}">
                @csrf
                <div class="form-group">
                    <input id="password" type="password" class="form-control input-habbo @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe actuel">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-box">
                    <h3 class="sub-title-form-box">Nouveau mot de passe</h3>
                    <p class="color-blue">
                        Utilise au moins 6 caractères. Inclue au moins une lettre et au moins un chiffre ou un caractère spécial.
                    </p>
                    <div class="form-group">
                    <input id="newpassword" type="password" class="form-control input-habbo @error('newpassword') is-invalid @enderror" name="newpassword" placeholder="Nouveau mot de passe">
                    @error('newpassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <input id="repassword" type="password" class="form-control input-habbo @error('repassword') is-invalid @enderror" name="repassword" placeholder="Répète-le mot de passe">
                    @error('repassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                </div>                
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-habbo green w-50">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <h2 class="title-mini-transform d-inline-block position-relative setting-title-2">Mon compte</h1>
            @include('templates.navigation.settings')
        </div>
    </div>
</div>
@endsection
