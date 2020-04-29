@extends('layouts.app')

@section('title', 'Me connecter')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img class="img-fluid" class="Diamont Painting" src="{{ asset('images/login/diamont_painting.png') }}">
                </div>
                <div class="col-md-9">
                    <h2>Rencontre, crée et construit!</h2>
                    <p class="color-blue text-login text-justify">
                        Inscrit-toi et joue gratuitement! Rentre dans ton monde pixelisé, construis, crée et fais toi plein de nouveaux amis.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            @include('alerts')
            <h1 class="title-login">Connexion</h1>
            <p class="p-login color-blue">
                Tapez votre nom d'utilisateur et mot de passe
            </p>
            <form method="post" action="{{ route('login') }}">
                @csrf
                @method('POST')
                <div class="form-group">
                    <input id="username" type="text" class="form-control input-habbo @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Nom d'utilisateur">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control input-habbo @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Mot de passe">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-habbo">
                        Connexion
                    </button>
                </div>
                <div class="form-group">
                    <h2>Besoin d'aide ?</h2>
                    <a class="color-blue" href="{{ route('password.request') }}">
                        J'ai oublié mon mot de passe
                    </a>
                </div>
                <div class="form-group">
                    <a href="{{ route('register') }}" class="w-100 btn btn-habbo green btn-register">M'inscrire</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="background-auth"></div>
@endsection
