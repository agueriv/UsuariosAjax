<!DOCTYPE html>
<html lang="en">
<head>
	<title>Loginpage - Ariel Guerrero</title>
	<meta charset="UTF-8">
	<meta name="url-base" content="{{ url('') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ url('images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form col-xl-8" id="login-form">
					<div style="margin: 0 auto; max-width: 560px">
						<span class="login100-form-title p-b-43">
							Login to continue
						</span>
						
						
						<div class="wrap-input100 validate-input mb-2" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="email" id="email">
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>
						
						<span class="mb-4" id="emailError" style="font-size: 14px;margin-left: 1rem;display: block;color: red"></span>
						
						
						<div class="wrap-input100 validate-input mb-2" data-validate="Password is required">
							<input class="input100" type="password" name="pass" id="password">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>
						
						<span class="mb-5" id="passError" style="font-size: 14px;margin-left: 1rem;display: block;color: red"></span>
						
						<span class="mb-3 text-center" id="unauthorized" style="font-size: 1rem;display: block;color: red"></span>
						
						<div class="container-login100-form-btn">
							<button type='button' class="login100-form-btn" id='login-btn'>
								Login
							</button>
						</div>
						
					</div>
				</form>
				
				<!-- USUARIO LOGUEADO -->
				<form class="login100-form validate-form col-xl-8" id="loggued-form" style="display:none">
					<div style="margin: 0 auto; max-width: 560px">
						<span class="login100-form-title p-b-43">
							Bienvenido '<span id="username"></span>'
						</span>
						
						
						<div class="wrap-input100 validate-input mb-4" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100 text-center" type="text" name="email" id="userEmail" disabled>
						</div>
						
						
						<div class="container-login100-form-btn">
							<button type="button" class="login100-form-btn" id="logout-btn">
								Logout
							</button>
						</div>
						
					</div>
				</form>

				<div class="login100-more col-xl-4" style="background-image: url('{{ url('images/cover.jpg') }}');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{ url('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ url('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('js/main.js') }}"></script>
	
	<script type="text/javascript" src="{{ url('js/loginpage.js') }}"></script>
</body>
</html>