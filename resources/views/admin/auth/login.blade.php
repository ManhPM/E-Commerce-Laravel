<!DOCTYPE html>
<html lang="en">

				<head>
								<title>P2M FOOTWEAR</title>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1">
								<!--===============================================================================================-->
								<link rel="icon" type="image/png" href={{ asset("admin/assets/auth/images/icons/favicon.ico") }} />
								<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css"
												href={{ asset("admin/assets/auth/vendor/bootstrap/css/bootstrap.min.css") }}>
								<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css"
												href={{ asset("admin/assets/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}>
								<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css"
												href={{ asset("admin/assets/auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css") }}>
								<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css" href={{ asset("admin/assets/auth/vendor/animate/animate.css") }}>
								<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css"
												href={{ asset("admin/assets/auth/vendor/css-hamburgers/hamburgers.min.css") }}>
								<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css"
												href={{ asset("admin/assets/auth/vendor/animsition/css/animsition.min.css") }}>
								<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css" href={{ asset("admin/assets/auth/vendor/select2/select2.min.css") }}"v">
								<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css"
												href={{ asset("admin/assets/auth/vendor/daterangepicker/daterangepicker.css") }}>
								<!--===============================================================================================-->
								<link rel="stylesheet" type="text/css" href={{ asset("admin/assets/auth/css/util.css") }}>
								<link rel="stylesheet" type="text/css" href={{ asset("admin/assets/auth/css/main.css") }}>
								<link rel="stylesheet" type="text/css" href={{ asset("admin/assets/auth/css/message.css") }}>
								<!--===============================================================================================-->
				</head>

				<body style="background-color: #666666;">

								<div class="limiter">
												<div class="container-login100">
																<div class="wrap-login100">
																				<form action="{{ route("admin.authenticate") }}" method="POST"
																								class="login100-form validate-form">
																								@csrf
																								@include("admin.message")
																								<span class="login100-form-title p-b-43">
																												Login to continue
																								</span>
																								<label for="email">Email</label>
																								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
																												<input class="input100 @error("email") is-invalid @enderror" type="text" name="email"
																																value="{{ old("email") }}" required>
																												<span class="focus-input100"></span>
																								</div>

																								@error("email")
																												<p style="color: red">{{ $message }}</p>
																								@enderror
																								<label for="password">Password</label>
																								<div class="wrap-input100 validate-input" data-validate="Password is required">
																												<input class="input100 @error("email") is-invalid @enderror" type="password" name="password"
																																required>
																												<span class="focus-input100"></span>
																								</div>

																								@error("password")
																												<p style="color: red">{{ $message }}</p>
																								@enderror

																								<div class="flex-sb-m p-t-3 p-b-32 w-full">
																												<div class="contact100-form-checkbox">
																																<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
																																<label class="label-checkbox100" for="ckb1">
																																				Remember me
																																</label>
																												</div>

																												<div>
																																<a href="#" class="txt1">
																																				Forgot Password?
																																</a>
																												</div>
																								</div>

																								<div class="container-login100-form-btn">
																												<button class="login100-form-btn">
																																Login
																												</button>
																								</div>

																								<div class="p-t-46 p-b-20 text-center">
																												<span class="txt2">
																																or sign up using
																												</span>
																								</div>

																								<div class="login100-form-social flex-c-m">
																												<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
																																<i class="fa fa-facebook-f" aria-hidden="true"></i>
																												</a>

																												<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
																																<i class="fa fa-twitter" aria-hidden="true"></i>
																												</a>
																								</div>
																				</form>

																				<div class="login100-more"
																								style="background-image: url({{ asset("admin/assets/auth/images/bg-01.jpg") }});">
																				</div>
																</div>
												</div>
								</div>

								<!--===============================================================================================-->
								<script src={{ asset("admin/auth/vendor/jquery/jquery-3.2.1.min.js") }}></script>
								<!--===============================================================================================-->
								<script src={{ asset("admin/auth/vendor/animsition/js/animsition.min.js") }}></script>
								<!--===============================================================================================-->
								<script src={{ asset("admin/auth/vendor/bootstrap/js/popper.js") }}></script>
								<script src={{ asset("admin/auth/vendor/bootstrap/js/bootstrap.min.js") }}></script>
								<!--===============================================================================================-->
								<script src={{ asset("admin/auth/vendor/select2/select2.min.js") }}></script>
								<!--===============================================================================================-->
								<script src={{ asset("admin/auth/vendor/daterangepicker/moment.min.js") }}></script>
								<script src={{ asset("admin/auth/vendor/daterangepicker/daterangepicker.js") }}></script>
								<!--===============================================================================================-->
								<script src={{ asset("admin/auth/vendor/countdowntime/countdowntime.js") }}></script>
								<!--===============================================================================================-->
								<script src={{ asset("admin/auth/js/main.js") }}></script>
								<script src={{ asset("admin/auth/js/message.js") }}></script>

				</body>

</html>
