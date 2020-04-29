@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 text-center">
            <img src="https://www.habbo.de/habbo-imaging/avatarimage?figure={{ Auth::user()->look }}&size=l&direction=2&head_direction=3&gesture=sml">
        </div>
        <div class="col-md-4">
            <h1 class="username-me">{{ Auth::user()->username }}</h1>
            <span class="motto-me font-italic">{{ Auth::user()->motto }}</span>
            <div class="mt-2">
            <p class="color-blue">
                Tu as créé ton compte le <span class="text-white">{{ Carbon::createFromTimestamp(Auth::user()->account_created)->isoFormat('lll') }}</span>
            </p>
            </div>
            <div class="mt-2">
                <span class="monnaie credit mr-3">{{ Auth::user()->credits }}</span>
                <span class="monnaie pixel">{{ Auth::user()->activity_points }}</span>
            </div>
            <div class="mt-2">
                <a href="{{ route('client') }}" target="_blank" class="btn btn-habbo green hotel-btn">Entrer dans l'hôtel</a>
            </div>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>

<div class="section-title newstitle mt-5 mb-4">
    <h1>Dernières actualités</h1>
</div>

<div class="container pt-5">
    <div class="row">
            @foreach($news as $new)
            @if($loop->first)
            <div class="col-md-6">
                <div class="new-item-last" style="background-image:url({{ $new->background }});">
                    <h2><a class="text-decoration-none text-white" href="{{ route('new', $new->slug) }}">{{ $new->title }}</a></h2>
                    <div>
                        <span class="text-white">{{ $new->created_at }}</span>
                    </div>
                    <p class="w-100 mt-4 new-item-last-shortbody">
                        {{ $new->short_body }}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="list-item-news">
            @else
                <li class="mb-4">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <div class="img-mini-new-list" style="background-image:url({{ $new->background }})"></div>
                            </a>
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="media-heading text-uppercase font-weight-light"><a class="text-decoration-none text-white" href="{{ route('new', $new->slug) }}">{{ $new->title }}</a></h4>
                            <p class="color-blue">{{ $new->short_body}}</p>
                        </div>
                    </div>
                </li>
            @endif
            @if ($loop->iteration % $loop->count == 0) 
            </ul>
            </div> 
            @endif 

        @endforeach
    </div>
</div>
@endsection
