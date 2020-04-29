@extends('layouts.app')

@section('title', 'Boutique')

@section('content')
<div class="container">
    <h1 class="title-login">Boutique</h1>
</div>
<div class="section-title shoptitle mt-4 mb-4">
        <h1>Abonnement Premium</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-box box-shop-home">
                <div class="row">
                    <div class="col-md-2">
                        <img id="avatar-shop" src="https://www.habbo.de/habbo-imaging/avatarimage?figure=hd-180-14.ch-3438-81-1408.sh-3206-1409.cc-3289-92.hr-831-37.lg-3023-110.he-1604-0.ha-1004-106&amp;size=l&amp;direction=2&amp;head_direction=3&amp;gesture=sml">
                    </div>
                    <div class="col-md-6 ">
                        <h2>Te voilà toi!</h2>
                        <p>
                            Bienvenue sur la boutique de Pixel-Habbo, ici tu pourras <a href="{{ route('pixel') }}">acheter des pixels</a> (la monnaie payante du jeu) pour pouvoir bénéficier des offres présentes comme <a href="{{ route('shop') }}">adhérer au premium club</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 pt-4">
        <div class="form-box">
                <h2 class="subtitle-shop">Devenir membre du club</h2>
                <p class="text-shop color-blue">
                    Le Premium Club est le club de tous les avantages ! Tu peux y adhérer pour 30 pixels et pour une durée de 31 jours. Tu débloqueras de nouvelles fonctionnalités, des nouvelles commandes et bien plus encore...
                </p>
            </div>
            <div class="form-box mt-3">
                <h2 class="subtitle-shop">Comment je m'abonne?</h2>
                <p class="text-shop color-blue">
                    Pour rejoindre le Premium Club il suffit de prendre connaisance de tous les avantages listés à ta droite. Clique sur "Adhérer au club".
                </p>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7 pt-4">
            @include('alerts')
            <form method="post" action="{{ route('shop') }}">
            @csrf
            <h2 class="title-mini-transform d-inline-block position-relative premium-title">Adhérer au Premium Club</h1>

            <div class="item-shop-list item1">
                <h3>Animation</h3>
                <p>Gain de <span class="color-blue">2 crédits</span> par animation en plus de la récompense basique</p>
            </div>
            <div class="mt-2 item-shop-list item2">
                <h3>Cadeau</h3>
                <p>Nous t'offrons un cadeau journalier qui te donnera <span class="color-blue">1 crédit</span> en plus chaque jour pendant la période de ton premium</p>
            </div>
            <div class="mt-2 item-shop-list item3">
                <h3>Réduction</h3>
                <p>Une réduction de <span class="color-blue">10%</span> sur ton prochain mois dans le Premium Club</p>
            </div>
            <div class="mt-2 item-shop-list item4">
                <h3>Catalogue</h3>
                <p>Ajouts des lingots de platine dans ta boutique "magots"</p>
            </div>
            <div class="mt-2 item-shop-list item5">
                <h3>Améliore la qualité du Premium</h3>
                <p>Participe à une réunion avec le personnel de Pixel-Habbo tous les deux mois pour suggérer tes idées concernant le Premium Club</p>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="stat-pixel">
                        <span class="monnaie pixel">{{ $price }}</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <button type="submit" class="btn btn-habbo green">
                            Adhérer au Club
                        </button>
                    </div>
                </div>
            </div>
            </form>
        
        </div>
    </div>
</div>
@endsection
