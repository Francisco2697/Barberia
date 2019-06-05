@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

 <!-- LOGIN PERSONALIZADO -->

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="{{ asset('images/img-01.png') }}" alt="IMG">
			</div>

			<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
				<span class="login100-form-title">
					Inicio de sesión
				</span>

				<div class="wrap-input100 validate-input" data-validate = "Se requiere un correo electrónico válido: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Correo electrónico">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    
				</div>

				<div class="wrap-input100 validate-input" data-validate = "La contraseña es requerida">
					<input class="input100" type="password" name="password" placeholder="Contraseña">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                    
				</div>
                <div class="col-md-12">
                    @if ($errors->has('password'))
                        <span class="help-block warning">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    @if ($errors->has('email'))
                        <span class="help-block warning">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
					
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Ingresar
					</button>
				</div>




				<div class="text-center p-t-12">
					<span class="txt1">
						Olvidaste tu
					</span>
					<a class="txt2" href="{{ route('password.request') }}">
						contraseña?
					</a>
				</div>

					    <!--<div class="text-center p-t-136">
						    <a class="txt2" href="#">
							    Create your Account
							    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						    </a>
					    </div>-->
			</form>
		</div>
	</div>
</div>  
@endsection

@section('script')

<script src="{{ asset('js/main.js') }}"></script>

@endsection
