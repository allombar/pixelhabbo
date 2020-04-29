@extends('layouts.app')

@section('title', $data->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="title-login">{{ $data->title }}</h1>
            <div class="show-background-new mb-4 mt-3" style="background-image:url({{ $data->background }});"></div>
            <p class="color-blue">
                {{ $data->short_body }}
            </p>
            {!!$data->body!!}
        </div>
        <div class="col-md-4">
        <ul class="list-item-news">
            @foreach($news as $new)
            <li class="mb-4" style="height:90px;">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <div class="img-mini-new-list" style="background-image:url({{ $new->background }})"></div>
                        </a>
                    </div>
                    <div class="media-body pl-3">
                        <h4 class="media-heading text-uppercase font-weight-light"><a class="text-decoration-none text-white" href="{{ route('new', $new->slug) }}">{{ $new->title }}</a></h4>
                        <span class="color-gray" style="margin-top:-14px">{{ $new->created_at }}</span>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>  
        </div>
    </div>
</div>
@endsection
