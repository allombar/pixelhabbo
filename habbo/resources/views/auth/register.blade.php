@extends('layouts.app')

@section('title', 'M\'inscrire')

@section('content')
<div class="container position-relative registration-form">
    <div class="row">
        <div class="col-md-5">
           <h1 class="title-login">M'inscrire</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input id="username" type="text" class="w-75 form-control input-habbo @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input id="email" type="email" class="w-75 form-control input-habbo @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <p class="pt-2 color-blue">
                            Vous aurez besoin de l'e-mail pour récupérer votre mot de passe si vous l'oubliez. Veuillez utiliser un e-mail réel et accessible pour votre compte
                        </p>
                    </div>

                    <div class="form-group pt-2">
                        <label for="password">Mot de passe</label>
                        <input id="password" type="password" class="w-75 form-control input-habbo @error('password') is-invalid @enderror" name="password" >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">Confirme ton mot de passe</label>
                        <input id="password-confirm" type="password" class="w-75 form-control input-habbo" name="password_confirmation">
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-habbo">
                        M'inscrire
                        </button>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection
