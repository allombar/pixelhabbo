@extends('layouts.app')

@section('title', 'Boutique')

@section('content')
<div class="container">
    <h1 class="title-login">Boutique</h1>
</div>
<script src="//api.dedipass.com/v1/pay.js"></script>
<div class="section-title toptitle mt-4 mb-4">
        <h1>Acheter des pixels</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-box">
                <h2 class="subtitle-shop">Méthode de paiement</h2>
                <div data-dedipass="c3302f24a3da3043f9e34af2893cc992" data-dedipass-custom=""></div>
                @csrf
            </div>
        </div>
    </div>
</div>
@endsection
