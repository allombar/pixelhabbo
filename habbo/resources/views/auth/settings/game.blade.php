@extends('layouts.app')

@section('title', 'Mes paramètres')

@section('content')
<div class="container">
    <h1 class="title-login">Mes paramètres</h1>
    <div class="row pt-4">
        <div class="col-md-6">
            <h2 class="title-mini-transform d-inline-block position-relative setting-title">Modifier mes paramètre de jeu</h1>
            @include('alerts')
            <form method="post" action="{{ route('settings') }}">
                @csrf
                <div class="form-box">
                    <h3 class="sub-title-form-box">Demande d'amitié</h3>
                    <p class="color-blue">
                        Les autres joueurs peuvent m'envoyer des demandes d'amis
                    </p>
                    <div class="pretty p-default p-round p-thick">
                        <input type="radio" name="textamigo" value="0" @if(Auth::user()->block_newfriends == '0') checked="checked" @endif/>
                        <div class="state p-primary-o">
                            <label>Accepter</label>
                        </div>
                    </div>
                    <div class="pretty p-default p-round p-thick">
                        <input type="radio" name="textamigo" value="1" @if(Auth::user()->block_newfriends == '1') checked="checked" @endif/>
                        <div class="state p-primary-o">
                            <label>Refuser</label>
                        </div>
                    </div>
                </div>                
                <div class="form-box mt-3">
                    <h3 class="sub-title-form-box">Préférences rejoindre</h3>
                    <p class="color-blue">
                        Mes amis peuvent me rejoindre
                    </p>
                    <div class="pretty p-default p-round p-thick">
                        <input type="radio" name="join" value="0" @if(Auth::user()->hide_inroom == '0') checked="checked" @endif/>
                        <div class="state p-primary-o">
                            <label>Mes amis</label>
                        </div>
                    </div>
                    <div class="pretty p-default p-round p-thick">
                        <input type="radio" name="join" value="1" @if(Auth::user()->hide_inroom == '1') checked="checked" @endif/>
                        <div class="state p-primary-o">
                            <label>Personne</label>
                        </div>
                    </div>
                </div>

                <div class="form-box mt-3">
                    <h3 class="sub-title-form-box">Statut de connexion</h3>
                    <p class="color-blue">
                        Qui peut voir mon statut de connexion
                    </p>
                    <div class="pretty p-default p-round p-thick">
                        <input type="radio" name="stat" value="0" @if(Auth::user()->hide_online == '0') checked="checked" @endif />
                        <div class="state p-primary-o">
                            <label>Tout le monde</label>
                        </div>
                    </div>
                    <div class="pretty p-default p-round p-thick">
                        <input type="radio" name="stat" value="1" @if(Auth::user()->hide_online == '1') checked="checked" @endif />
                        <div class="state p-primary-o">
                            <label>Personne</label>
                        </div>
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
