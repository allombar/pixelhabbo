@extends('layouts.app')

@section('title', 'Articles')

@section('content')
<div class="container">
    <h1 class="title-login">Articles</h1>
    <p class="color-blue">
        Voici les dernièrs articles de <strong class="text-white">{{ config('app.name') }}</strong>
    </p>
    <div class="row">
        <ul class="list-item-news">
            @foreach($news as $new)
            <li class="mb-4" style="height:140px;">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <div class="img-mini-new-list-community" style="background-image:url({{ $new->background }})"></div>
                        </a>
                    </div>
                    <div class="media-body pl-3">
                        <h4 class="media-heading text-uppercase font-weight-light"><a class="text-decoration-none text-white" href="{{ route('new', $new->slug) }}">{{ $new->title }}</a></h4>
                        <span class="color-gray" style="margin-top:-14px">{{ $new->created_at }}</span>
                        <p class="color-blue-2 mt-2">{{ $new->short_body}}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>   
    </div>
</div>
@endsection
