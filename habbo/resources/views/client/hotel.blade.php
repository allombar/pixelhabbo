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
    <title>{{ config('app.name') }} - Hôtel</title>

    <script>
        var roomId = {{ !empty($data) ? $data->id : 0 }};
    </script>

    <link rel="stylesheet" href="{{ asset('hotel/main.css') }}">
    <script src="{{ asset('hotel/build.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta name="google" content="notranslate" />
</head>

<body>
        <div id="flash-container">
            <div id="content" class="frank_bg">
                <h1 class="title">TU DOIS AUTORISER FLASH POUR JOUER À PIXEL !</h1>
                <p>Si tu utilises un ordinateur, tu dois
                    <a href="http://www.adobe.com/go/getflashplayer" target="_blank">autoriser, installer ou actualiser Flash
                    </a>
                    pour jouer à {{ config('app.name') }}. Clique
                    <a href="http://www.adobe.com/go/getflashplayer" target="_blank" id="getadobe">ICI</a>
                    pour utiliser Fash ! NB: si Flash est bloqué, tu auras besoin d’aller dans les paramètres de ton navigateur pour le débloquer et pouvoir jouer à {{config('app.name') }}.</p>
            </div>
        </div>
        <div id="client-ui">
        <fullscreen></fullscreen>
        <infobulle></infobulle>
        <notiftop></notiftop>
        <rpstats></rpstats>
        <rpbox-buyitems></rpbox-buyitems>
        <rpbox-inventory>
        <rpbox-inventory-troc></rpbox-inventory-troc>
        </rpbox-inventory>
        <rpbox-inventory-choice></rpbox-inventory-choice>
        <notifalert></notifalert>
        <rpchoose></rpchoose>
        <youtube-box>
        <youtube-player></youtube-player>
        <youtube-edit></youtube-edit>
        </youtube-box>
        <pixelhabbotool>
        <pixelhabbotool-hotelalert></pixelhabbotool-hotelalert>
        <pixelhabbotool-chatlogpub></pixelhabbotool-chatlogpub>
        <pixelhabbotool-admin></pixelhabbotool-admin>
        </pixelhabbotool>

    </div>

</body>

</html>