<div class="list-group">
    <a href="{{ route('settings') }}" class="list-group-setting {{ Request::is('settings/account') ? 'active' : '' }}">Paramètre de jeu</a>
    <a href="{{ route('settings.password') }}" class="list-group-setting {{ Request::is('settings/account/password') ? 'active' : '' }}">Mot de passe</a>
    <a href="#" class="list-group-setting">Adresse e-mail</a>
</div>
