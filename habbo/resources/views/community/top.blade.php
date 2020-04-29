@extends('layouts.app')

@section('title', 'Les meilleurs joueurs')

@section('content')
<div class="container">
    <h1 class="title-login">Classement</h1>
</div>
<!-- TOP CREDITS -->
<div class="section-title toptitle mt-4 mb-4">
    <h1>Crédits</h1>
</div>
<div class="container">
    <div class="row">
        @foreach($credits as $user)
        <div class="col-md-4">
            <div class="top-box">
                <div class="media">
                    <div class="media-left top-first-user" @if($loop->iteration == 2)style="background-position:210px 67px;" @endif @if($loop->iteration == 3)style="background-position:274px 48px;" @endif>
                        <img src="https://www.habbo.de/habbo-imaging/avatarimage?figure={{ $user->look }}&size=m&direction=2&head_direction=3&gesture=sml">
                    </div>
                    <div class="media-body pl-3 pt-4">
                        <span class="color-blue" style="font-size:1.3rem;font-family:'Ubuntu Condensed';">Top #{{$loop->iteration}}</span>
                        <h4 class="media-heading text-uppercase font-weight-light">{{ $user->username }}</h4>
                        <div class="top-data-box">
                            <span class="monnaie credit">{{ $user->credits }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- TOP PIXELS -->
<div class="section-title toptitle-2 mt-4 mb-4">
    <h1>Pixels</h1>
</div>
<div class="container">
    <div class="row">
    @foreach($pixels as $user)
        <div class="col-md-4">
            <div class="top-box">
                <div class="media">
                    <div class="media-left top-first-user" @if($loop->iteration == 2)style="background-position:210px 67px;" @endif @if($loop->iteration == 3)style="background-position:274px 48px;" @endif>
                        <img src="https://www.habbo.de/habbo-imaging/avatarimage?figure={{ $user->look }}&size=m&direction=2&head_direction=3&gesture=sml">
                    </div>
                    <div class="media-body pl-3 pt-4">
                        <span class="color-blue" style="font-size:1.3rem;font-family:'Ubuntu Condensed';">Top #{{$loop->iteration}}</span>
                        <h4 class="media-heading text-uppercase font-weight-light">{{ $user->username }}</h4>
                        <div class="top-data-box">
                            <span class="monnaie pixel">{{ $user->activity_points }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection
