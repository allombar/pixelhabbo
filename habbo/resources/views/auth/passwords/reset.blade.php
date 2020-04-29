@extends('layouts.app')

@section('title', 'Réinitialiser votre mot de passe')

@section('body', 'forgot-form')

@section('content')
<div class="container">
    <h1 class="title-login">Réinitialiser votre mot de passe</h1>
    <div class="row">
        <div class="col-md-8">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <h3 class="sub-title-form-box">Adresse e-mail</h3>
                    <input id="email" type="email" class="form-control w-75 input-habbo @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <h3 class="sub-title-form-box">Nouveau mot de passe</h3>
                    <input id="password" type="password" class="form-control w-75 input-habbo @error('password') is-invalid @enderror" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <h3 class="sub-title-form-box">Confirmer votre nouveau mot de passe</h3>
                    <input id="password-confirm" type="password" class="form-control w-75 input-habbo" name="password_confirmation">
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-habbo red">
                            Confirmer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
