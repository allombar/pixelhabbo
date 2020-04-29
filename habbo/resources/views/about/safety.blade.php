@extends('layouts.app')

@section('title', 'Sécurité')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="about">
                <h1>Conseil sécurité</h1>
                <p>Ci-dessous les 7 meilleurs conseils pour savoir comment naviguer sur Internet en toute sécurité!</p>
                <p><img src="{{ asset('images/about/safetytips1_n.png') }}" alt="Protège tes infos persos" class="align-right"></p>
                <h3>Protège tes informations personnelles</h3>
                <p>Tu ne sais jamais avec qui tu es vraiment en train de parler en ligne, donc ne donne jamais ton vrai nom, adresse, numéro de téléphone, photos ou nom de ton école. Partager ces informations personnelles peut te conduire à être victime d'une arnaque, d'intimidation ou de te mettre en danger.</p>
                <hr>
                <p><img src="{{ asset('images/about/safetytips2_n2.png') }}" alt="Protège ta vie privée" class="align-right"></p>
                <h3>Protège ta vie privée</h3>
                <p>Garde les coordonnées de ton Facebook, Twitter, Skype, Instagram ou Snapchat pour toi. Tu ne sais jamais où cela peut te conduire.</p>
                <hr>
                <p><img src="{{ asset('images/about/safetytips3_n.png') }}" alt="Ne cède pas à la pression" class="align-right"></p>
                <h3>Ne cède pas à la pression des autres</h3>
                <p>Que tout le monde fasse quelque chose n'est pas une raison pour toi de le faire si tu n'es pas à l'aise avec cette idée.</p>
                <hr>
                <p><img src="{{ asset('images/about/safetytips4_n.png') }}" alt="Garde tes amis en pixels" class="align-right"></p>
                <h3>Garde tes copains en pixels!</h3>
                <p>Ne jamais rencontrer des personnes que tu connais uniquement via internet, les gens ne sont pas toujours ceux qu'ils prétendent être! Si quelqu'un te demande de le/la rencontrer dans la vraie vie, il vaut mieux dire "Non merci!", cliquer sur "Ignorer" et en parler à tes parents ou un autre adulte de confiance.</p>
                <hr>
                <p><img src="{{ asset('images/about/safetytips5_n.png') }}" alt="N'aies pas peur de dire les choses" class="align-right"></p>
                <h3>N'aies pas peur de dire les choses!</h3>
                <p>Si quelqu'un te met mal à l'aise ou te fait peur avec des menaces dans Habbo, signale-le immédiatement à notre équipe de modération en utilisant le bouton d'alerte.</p>
                <hr>
                <p><img src="{{ asset('images/about/safetytips6_n.png') }}" alt="Laisse tomber les images" class="align-right"></p>
                <h3>Laisse tomber les images</h3>
                <p>Tu n'as aucun contrôle sur tes photos et images webcam une fois que tu les as partagées sur Internet, tu ne peux plus les récupérer. Elles peuvent être partagées avec n'importe qui, n'importe où et être utilisées pour t'intimider, te faire du chantage ou te menacer. Avant de publier une photo, demande-toi si tu es à l'aise pour que des gens que tu ne connais pas la voient.</p>
                <hr>
                <p><img src="{{ asset('images/about/safetytips7_n.png') }}" alt="Sois un surfeur intelligent" class="align-right"></p>
                <h3>Sois un surfeur intelligent</h3>
                <p>Les sites Web qui vous offrent des crédits gratuits, des mobis, ou qui font semblant d'être de nouveaux sites Habbo Hôtel ou des pages du personnel Habbo sont tous des escroqueries dans le but de voler ton mot de passe. Ne leur donne pas tes coordonnées et ne télécharge jamais des fichiers depuis ces sites, car ils pourraient être des logiciels espions ou des virus!</p>
            </div>
        </div>
    </div>
</div>  
@endsection
