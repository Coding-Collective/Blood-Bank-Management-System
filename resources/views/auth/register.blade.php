<!DOCTYPE html>
<html lang="en">
<head>
<title>WeCare | Blood Bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util1.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/1.png');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf
					<span class="login100-form-logo">
						<i class="fa fa-hospital-o" aria-hidden="true"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>

					<!-- Name -->
					<div class="wrap-input100 validate-input" data-validate = "Enter Name">
						<input class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="{{ __('Name') }}">
						@error('username')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<!-- Username -->
					<div class="wrap-input100 validate-input" data-validate = "Enter Username">
						<input class="input100 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" placeholder="{{ __('Username') }}">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<!-- Email -->
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<!-- Password -->
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- Confirm Password -->
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" class="name form-control" name="password_confirmation" autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					
					<div class="contact100-form-checkbox">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						{{ __('Register') }}
						</button>
					</div>

					<div class="text-center p-t-90">
						Have an account? <a href="{{ route('login') }}"><span id="link">{{ __('Log In') }}</span></a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>

</body>
</html>