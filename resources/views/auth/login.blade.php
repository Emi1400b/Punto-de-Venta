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
                    <div class="container">
                        <form method="POST" action="{{ route('login') }}">
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
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>    
                            <div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-unlock"></i></span>
								</div>      
                                <select  type="varchar" class="form-control">
                                    <option value="" disabled selected >Elige el acceso</option>
                                    <option value="1">Acceso 1</option>
                                    <option value="2">Acceso 2</option>
                                </select>
							</div>
                            <div>
								<div class="d-flex justify-content-center mt-3 login_container"> 
									<button type="submit" name="button" class="btn login_btn">{{ __('Iniciar Sesión') }}</button>
								</div>
							</div>	
                            
                            <!-- <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    < @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div> -->
                        </form>  
                    </div>
                </div>
            </div>
        </div>
       
    </body>
</html>