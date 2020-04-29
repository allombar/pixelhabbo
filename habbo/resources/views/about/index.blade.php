@extends('layouts.app')

@section('title', 'Qu\'est-ce que PixelHabbo?')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="about">
                <h1>{{ config('app.name') }}, c'est quoi?</h1>
                <p><a href="{{ route('register') }}" class="remove-link"><img src="https://images.habbo.com/c_images/WhatIsHabbo/join_now_FR.png" alt="Rejoins-nous" class="align-right"></a></p>
                <p>{{ config('app.name') }} est une communauté virtuelle en ligne pixelisée et vintage où tu pourras <strong>créer ton propre avatar, te faire des amis, discuter, créer des apparts, construire des jeux et y participer</strong> et bien plus encore! Presque tout est possible dans ce lieu étrange, plein de gens incroyables…</p>
                <h2>Plus qu'un jeu…</h2>
                <p><img src="{{ asset('images/about/ill_15.png') }}" alt="Trouve ta place" class="align-right"></p>
                <p>Relooker ton avatar avec toutes les tendances les plus folles n'est pas la seule façon de s'amuser sur Habbo. Tu veux être l'architecte du siècle et <strong>construire des structures éblouissantes</strong>? Le Builders Club est pour toi! Tu veux montrer <strong>tes compétences de fou de construction de jeu</strong> et émerveiller tes amis? Rejoins les concours! Es-tu fan de selfies <strong>et photos drôles</strong>? Notre appareil photo sera une diversion sans fin pour toi!</p>
                <h2>Trouve ta place</h2>
                <p>Tu aimes discuter et sortir avec tes amis?  <strong>Les groupes Habbo, forums et les jeux de rôles</strong> c'est la direction à prendre pour commencer. Rejoins l'armée pour faire ton devoir, enfiler ta cape et sauver l'univers ; porte les créations {{ config('app.name') }} Couture pour te pavaner sur la piste ou deviens une infirmière et sauve des vies de pixels. Inscris-toi et commence à explorer les possibilités infinies de rôle!</p>
                <h2>Exprime-toi</h2>
                <p><img src="{{ asset('images/about/ill_16.png') }}" alt="Exprime-toi" class="align-right"></p>
                <p>La créativité et l'originalité sont les bienvenues sur Habbo! Chaque semaine, nous avons de supers compétitions que tu peux rejoindre. Des <strong>constructions d'apparts aux selfies, des vidéos style pixel-art et compétitions d'écriture</strong> - une tonne de trucs cools t'attendent pour laisser libre-court à ton élan artistique et gagner quelques winwin + prix! Tu es prêt? Consulte les news pour avoir plus d'infos sur la compétition du moment!</p>
                <h2>Joue gratuitement, pour toujours.</h2>
                <p>{{ config('app.name') }} est un jeu <strong>gratuit en ligne</strong> donc tu peux explorer un vaste monde de salles, quêtes, discuter et gagner des prix, sans jamais avoir à payer!</p>
                <p>Certains «extras» dans le jeu comme des animaux de compagnie, l'adhésion {{ config('app.name') }} Club, l'abonnement au Buider Club et autres mobis peuvent être achetés avec des Crédits Habbo. Pour plus d'informations sur les suppléments dans le jeu, consulter <a href="{{ route('shop') }}">{{ config('app.name') }} Shopping</a>.</p>
                <h2>Toujours là pour aider…</h2>
                <p><img src="{{ asset('images/about/ill_17.png') }}" alt="Toujours là pour aider" class="align-right"></p>
                <p>{{ config('app.name') }} est surveillé à longueur de journée. Tu peux aussi faire beaucoup de choses pour rester en sécurité. Consulte les <a href="{{ route('safety') }}">Conseils de sécurité</a> pour savoir quoi faire.</p>
                <p>En tant que communauté en ligne reconnue, nous sommes fiers d'avoir une connaissance importante  <strong>des règles de sécurités pour une navigation sûre</strong>, suivant les lignes directrices internationales établies par des groupes gouvernementaux et des organisations de protection de l'adolescence.</p>
            </div>
        </div>
    </div>
</div>  
@endsection
