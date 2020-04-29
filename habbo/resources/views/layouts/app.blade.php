<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ config('app.name') }}, pixel habbo, pixel-habbo, habboz, habbo, habbo hotel, habbocity, habbo city, habbo alpha, habboalpha, habboo, rétro, rétro habbo, bobbalive, adohotel, bobbahotel, habbix, jeu en ligne, serveur habbo, communauté, avatar, jeu" />
    <meta name="description" content="Inscris-toi gratuitement dans le meilleur hôtel, {{ config('app.name') }} ! Fais toi plein d'amis et deviens un {{ config('app.name') }} célèbre. N'oublie pas, ici tu peux séjourner gratuitement, profites-en et rejoins-nous!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.facebook.com/PixelHabboFR/">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="Inscris-toi gratuitement dans le meilleur hôtel, {{ config('app.name') }}! Fais toi plein d'amis et deviens un {{ config('app.name') }} célèbre. N'oublie pas, ici tu peux séjourner gratuitement, profites-en et rejoins-nous!">
    <meta property="og:image" content="{{ asset('images/index_n.png') }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://twitter.com/PixelHabbo3">
    <meta property="twitter:title" content="{{ config('app.name') }}">
    <meta property="twitter:description" content="Inscris-toi gratuitement dans le meilleur hôtel, {{ config('app.name') }}! Fais toi plein d'amis et deviens un {{ config('app.name') }} célèbre. N'oublie pas, ici tu peux séjourner gratuitement, profites-en et rejoins-nous!">
    <meta property="twitter:image" content="{{ asset('images/index_n.png') }}">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="@yield('body')">
    <div id="app">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-blue">
            <div class="my-0 mr-md-auto">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
                </a>
                @auth
                <a href="{{ route('client') }}" class="ml-4 hotel-button"><span class="hotel-button__text">Jouer</span> </a>
                @endauth
            </div>
            <nav class="my-2 my-md-0 mr-md-3 nav-px">
                <li class="px">
                    <a class="p-2 text-white icon-home" href="{{ route('home') }}">{{ Auth::user() ? 'Accueil' : config('app.name') }}</a>
                </li>
                <li class="px">
                    <a class="p-2 text-white icon-community dropdown-toggle" href="#" id="community" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Communauté
                    </a>
                    <div class="dropdown-menu" aria-labelledby="community">
                        <a class="dropdown-item" href="{{ route('staff') }}">Pixel Staff</a>
                        <a class="dropdown-item" href="{{ route('news') }}">Articles</a>
                        <a class="dropdown-item" href="{{ route('top') }}">Classement</a>
                    </div>
                </li>
                <li class="px">
                    <a class="p-2 text-white icon-shop dropdown-toggle" href="#" id="shop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Boutique
                    </a>
                    <div class="dropdown-menu" aria-labelledby="shop">
                        <a class="dropdown-item" href="{{ route('shop') }}">Premium Club</a>
                        <a class="dropdown-item" href="{{ route('pixel') }}">Acheter des pixels</a>
                    </div>
                </li>
                <li class="px">
                    <a class="p-2 text-white icon-about dropdown-toggle" href="#" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Les clés du jeu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="about">
                        <a class="dropdown-item" href="{{ route('about') }}">Qu'est-ce que {{ config('app.name') }}</a>
                        <a class="dropdown-item" href="{{ route('safety') }}">Sécurité</a>
                    </div>
                </li>
                @if (Auth::check())
                <li class="px">
                <a class="p-2 text-white dropdown-toggle-habbo" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-circle">
                        <img src="https://www.habbo.de/habbo-imaging/avatarimage?figure={{ Auth::user()->look }}&headonly=1&size=b&gesture=sml&direction=2&head_direction=2&action=std">
                    </div>
                </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{ route('settings') }}">Mes paramètres</a>
                        @if(Auth::user()->rank > 3)<a class="dropdown-item" href="{{ route('admin.index') }}">Administration</a>@endif
                        <a class="dropdown-item" href="{{ route('logout') }}">Déconnexion</a>
                    </div>
                </li>
                @endif
                </nav>
            @guest
                @if(!request()->is('/')) 
                <a class="ml-4 btn btn-login nav-px" href="{{ route('login') }}">Connexion</a>
                @endif
            @endguest
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="footer-pixelhabbo">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center">
                    <p class="color-blue">Suivre {{ config('app.name') }}</p>
                    <ul class="social text-center">
                        <li>
                            <a href="https://www.facebook.com/PixelHabboFR"><i class="iconfb"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/pixelhabbo3"><i class="icontw"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/pixelhabbo/"><i class="iconit"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <a class="link-footer" href="{{ route('safety') }}">Sécurité</a>
                    <a class="link-footer" href="{{ route('about') }}">Information</a>
                    <p class="footer-copy">
                        © 2018 - 2020<br>
                        {{ config('app.name') }} tous droits réservés.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
