@extends('layouts.app')

@section('title', 'Mot de passe oublié')

@section('body', 'forgot-form')

@section('content')
<div class="container">
    <h1 class="title-login">Mot de passe oublié</h1>
    <p class="color-blue">Vous avez oublié votre mot de passe? Ne vous inquietez pas, suivez les instructions demandés pour récuperer votre compte</p>
    @include('alerts')
    <div class="row">
        <div class="col-md-5 mt-4">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-box">
                    <h3 class="sub-title-form-box">Adresse e-mail</h3>
                    <input id="email" type="email" class="w-75 form-control input-habbo @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Tape ton e-mail ici...">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <div class="mt-3">
                        <button type="submit" class="btn btn-habbo">
                            Envoyer
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>
@endsection
