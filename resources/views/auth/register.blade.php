<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Punto de venta</title>
		
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		
		<link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
	</head>
	<body>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
						<div class="brand_logo_container">
							<img src="{{ asset('assets/img/usuario.png') }}" class="brand_logo" alt="Logo">
						</div>
					</div>
                    <div class="d-flex justify-content-center form_container">
                        
                        <form class="form-horizontal" method="POST" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="username" id="usuario" class="form-control @error('username') is-invalid @enderror input_user"  placeholder="Usuario" required >
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @endif
                                    </div>
							    </div>
                                
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                        </div>
                                        <select  name="empleado" id="empleado" type="varchar" class="form-control" autocomplete="empleado">
                                            <option value="" disabled selected >Desplega la lista...</option>
                                            @foreach($empleados as $empleado)
                                                <option value="{{$empleado->id_empleado}}">{{ $empleado->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repetir contraseña" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-center mt-3 login_container"> 
                                        <button type="submit" name="button" class="btn login_btn"> {{ __('Registrar') }}</button>
                                    </div>
                                </div>
                            </form>    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
