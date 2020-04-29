@extends('layouts.app')

@section('title', 'Pixel Staff')

@section('content')
<div class="container">
    <h1 class="title-login">Pixel Staff</h1>
    <p class="color-blue">
        Les Pixel Staffs sont indispensables à l'hôtel, chacun dispose d'un rôle différent qui promet d'assurer la modération ou l'animation du serveur. Ils vous assurent à toute heure, une sécurité optimale ainsi que des activités chaleureuses et accueillantes. Ils ont juré de faire respecter les conditions d'utilisation de Pixel-Habbo sans abus.
    </p>
    <div class="row mt-4">
        @foreach($staffs as $staff)
        <div class="text-center col-md-3 mb-4">
            <div class="box-staff">
                <div style="padding:1rem">
                    <div class="mt-2 mb-2 circle-staff-look" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?figure={{ $staff->look }}&size=l&direction=3&head_direction=3&gesture=sml);"></div>
                    <span class="username-staff">{{ $staff->username }}</span>
                </div>
                <div class="rank-staff">{{ $staff->real_name }}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
