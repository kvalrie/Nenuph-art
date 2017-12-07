@extends('layouts.master')
@section('content')
@include('layouts.header')
@section('content')
<section>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Connexion</h1>
            <form class="form-group " method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-4 col-form-label" >E-Mail Address</label>
                    <div class="col-sm-8">

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email')     }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
            </form>
        </div>
        <div class="col">

                <h1>Pas encore de compte Nenuph'art ?</h1><p>Crée le ici et facilité vous la vie.&nbsp;</p>

                <a href="{{ route('register') }}" class="btn"> Créer un compte </a>
                {{-- <a href="https://nenuphart/register" class="btn"></a> --}}
        </div>

    </div>
</div>

</section>
@endsection

{{-- <div class="col">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

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
</div>
@endsection --}}
{{-- <section>
    <div class="container">
    	<div class="row">
        <div class="col">
          <h1>Connexion</h1>

                <form method="POST" action="https://nenuphart/login" accept-charset="UTF-8" data-form-focus="true"><input name="_token" type="hidden" value="mZzgzbtZBC8JFbKz6bCvmkDLWDTwr80XCq5AVbBK">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" name="email" type="email" id="email">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" name="password" type="password" value="" id="password">

                </div>
                <div class="form-group">
                    <span><a href="https:reminder mot de place oublié">Mot de passe oublié?</a></span>
                </div>

                <button type="submit" class="btn">Connection</button>
                </form>
        </div>
        <div class="col">

               <h1>Pas encore de compte Nenuph'art ?</h1><p>Crée le ici et facilité vous la vie.&nbsp;</p>

                <a href="https://nenuphart/register" class="btn">Créer un compte</a>
        </div>
</div>
    </div>
</section>
@endsection --}}




