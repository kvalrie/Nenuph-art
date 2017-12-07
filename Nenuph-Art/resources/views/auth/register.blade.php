@extends('layouts.master')
@section('content')
@include('layouts.header')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Nouveau Profil</h2>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom d'utilisateur</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="username" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <h2>Password</h2>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <h2>Adresse de facturation</h2>

                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input class="form-control" name="telephone" type="text" id="telephone">
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="label-required">Prénom</label>
                            <input class="form-control" name="first_name" type="text" id="first_name">
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="label-required">nom de famille</label>
                            <input class="form-control" name="last_name" type="text" id="last_name">
                        </div>

                        <div class="form-group">
                            <label for="address" class="label-required">Adresse</label>
                            <input class="form-control" name="adress" type="text" id="adress">
                        </div>

                        <div class="form-group">
                            <label for="postal" class="label-required">Code postal</label>
                            <input class="form-control" name="postal" type="text" id="postal">
                        </div>

                        <div class="form-group">
                            <label for="city" class="label-required">Nom de lieu</label>
                            <input class="form-control" name="city" type="text" id="city">
                        </div>
                        <div class="form-group">
                            <label for="country_id" class="label-required">Pays</label>
                            <div class="dropdown-wrap form-control">
                                <select class="dropmenu" id="country_id" name="country_id"><option value="1">Belgique</option><option value="2">Luxembourg</option><option value="3">les Pays-Bas</option><option value="4">Autriche</option><option value="5">Bulgarie</option><option value="6">La République tchèque</option><option value="7">Allemagne</option><option value="8">Danemark</option><option value="9">Estonie</option><option value="10">l'Espagne</option><option value="11">Finlande</option><option value="12">France</option><option value="13">Grande-Bretagne</option><option value="14">Grèce</option><option value="15">Croatie</option><option value="16">Irlande</option><option value="17">Italie</option><option value="18">Lituanie</option><option value="19">Lettonie</option><option value="20">Pologne</option><option value="21">Le Portugal</option><option value="22">Roumanie</option><option value="23">Suède</option><option value="24">Slovénie</option><option value="25">Slovaquie</option><option value="26">Hongrie</option></select>
                            </div>
                        </div>


                        <h2 class="title-label">Informations sur la société <label>facultatives</label></h2>

                        <div class="form-group">
                            <label for="company_name">Nom de l'entreprise</label>
                            <input class="form-control" name="company_name" type="text" id="company_name">

                        </div>

                        <div class="form-group">
                            <label for="company_legal_form">Forme juridique</label>
                            <div class="input-values-wrap"><input class="form-control" data-input-values="NV;BVBA;VZW;VOF" name="company_legal_form" type="text" id="company_legal_form"><ul class="input-values-list" style="display: none;"><li>NV</li><li>BVBA</li><li>VZW</li><li>VOF</li><li>Autre ...</li></ul><div class="input-values-button"></div></div>

                        </div>

                        <div class="form-group">
                            <label for="company_vat">Numéro de TVA ou d'entreprise</label>
                            <input class="form-control" name="company_vat" type="text" id="company_vat">

                        </div>


                        <h2 class="title-checkbox">
                         <span>Adresse de livraison </span>
                     </h2>
                     <p id="shiptobilling" class="form-row">
                      Same as Shipping <input type="checkbox" onclick="SetBilling(this.checked);" checked="checked" />
                  </p>
                  <div id="deliveryadress" class="shipping_address"  style="display:none; ">


                    <div class="form-group">
                        <label for="delivery_first_name" class="label-required">Prénom</label>
                        <input class="form-control" name="delivery_first_name" type="text" id="delivery_first_name">

                    </div>

                    <div class="form-group">
                        <label for="delivery_last_name" class="label-required">nom de famille</label>
                        <input class="form-control" name="delivery_last_name" type="text" id="delivery_last_name">

                    </div>

                    <div class="form-group">
                        <label for="delivery_adress" class="label-required">Adresse</label>
                        <input class="form-control" name="delivery_adress" type="text" id="delivery_adress">

                    </div>

                    <div class="form-group">
                        <label for="delivery_postal" class="label-required">Code postal</label>
                        <input class="form-control" name="delivery_postal" type="text" id="delivery_postal">

                    </div>

                    <div class="form-group">
                        <label for="delivery_city" class="label-required">Nom de lieu</label>
                        <input class="form-control" name="delivery_city" type="text" id="delivery_city">

                    </div>

                    <div class="form-group">
                        <label for="delivery_country_id" class="label-required">Pays</label>
                        <div class="dropdown-wrap form-control">
                            <select class="dropmenu" id="delivery_country_id" name="delivery_country_id"><option value="1">Belgique</option><option value="2">Luxemburg</option><option value="3">Nederland</option><option value="4">Oostenrijk</option><option value="5">Bulgarije</option><option value="6">Tsjechië</option><option value="7">Duitsland</option><option value="8">Denemarken</option><option value="9">Estland</option><option value="10">Spanje</option><option value="11">Finland</option><option value="12">Frankrijk</option><option value="13">Groot-Brittannië</option><option value="14">Griekenland</option><option value="15">Kroatië</option><option value="16">Ierland</option><option value="17">Italië</option><option value="18">Litouwen</option><option value="19">Letland</option><option value="20">Polen</option><option value="21">Portugal</option><option value="22">Roemenië</option><option value="23">Zweden</option><option value="24">Slovenië</option><option value="25">Slowakije</option><option value="26">Hongarije</option></select>
                        </div>
                    </div>

                </div>


                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
</div>
</div>

<?php print_r($_POST) ; ?>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>


<script type="text/javascript">

    function SetBilling(checked) {
        if (checked) {
            document.getElementById('deliveryadress').style.display="none";
            // document.getElementById('delivery_first_name').value = '';
            document.getElementById('delivery_first_name').value = document.getElementById('first_name').value;
            document.getElementById('delivery_last_name').value = document.getElementById('last_name').value;
            document.getElementById('delivery_adress').value = document.getElementById('adress').value;
            document.getElementById('delivery_postal').value = document.getElementById('postal').value;
            document.getElementById('delivery_city').value = document.getElementById('city').value;
            document.getElementById('delivery_country_id').value = document.getElementById('country_id').value;
        } else {
            document.getElementById('deliveryadress').style.display="block";
            document.getElementById('delivery_first_name').value = '';
            document.getElementById('delivery_last_name').value = '';
            document.getElementById('delivery_adress').value = '';
            document.getElementById('delivery_city').value = '';
            document.getElementById('delivery_country_id').value = '';
            document.getElementById('delivery_postal').value = '';

            // document.getElementById('delivery_first_name').value = document.getElementById('first_name').value;
            // document.getElementById('delivery_last_name').value = document.getElementById('last_name').value;
            // document.getElementById('delivery_adress').value = document.getElementById('adress').value;
            // document.getElementById('delivery_postal').value = document.getElementById('postal').value;
            // document.getElementById('delivery_city').value = document.getElementById('city').value;
            // document.getElementById('delivery_country_id').value = document.getElementById('country_id').value;


        }
    }
</script>
@endsection




{{--
SECURITé

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nouveau Profil</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
