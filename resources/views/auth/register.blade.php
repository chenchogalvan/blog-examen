@extends('front')

@section('content')
<section id="content">

    <div class="content-wrap nopadding">

        <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: #444;"></div>

        <div class="section nobg full-screen nopadding nomargin">
            <div class="container-fluid vertical-middle divcenter clearfix">

                <div class="center">
                    <a href="/"><img src="/site/images/logo-dark.png" alt="Canvas Logo"></a>
                </div>

                <div class="card divcenter noradius noborder" style="max-width: 400px;">
                    <div class="card-body" style="padding: 40px;">
                        <form id="login-form" name="login-form" class="nobottommargin" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h3>Registrate</h3>

                            <div class="col_full">
                                <label for="login-form-username">Nombre:</label>
                                <input type="text" id="login-form-username" name="name" value="{{ old('name') }}" class="form-control not-dark {{ $errors->has('name') ? ' is-invalid' : '' }}" />
                               
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col_full">
                                <label for="login-form-username">Apellido:</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control not-dark {{ $errors->has('last_name') ? ' is-invalid' : '' }}" />
                               
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col_full">
                                <label for="login-form-username">Correo:</label>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control not-dark {{ $errors->has('email') ? ' is-invalid' : '' }}" />
                               
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col_full">
                                <label for="login-form-password">Contraseña:</label>
                                <input type="password" id="login-form-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" />

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col_full">
                                <label for="login-form-password">Confirmar contraseña:</label>
                                <input type="password" id="login-form-password" class="form-control" name="password_confirmation" />
                            </div>
                            <div class="col_full nobottommargin ">
                                <button class="button button-3d button-black nomargin mt-20" id="login-form-submit" name="login-form-submit" value="login">Iniciar</button>
                            </div>
                        </form>

                        <div class="line line-sm"></div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>
@endsection
