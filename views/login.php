<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Fintech - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=BASE_URL?>assets/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?=BASE_URL?>assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Preencher e-mail: ex@abc.xyz">
						<input class="input100" type="text" name="user" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Preencher senha">
						<input class="input100" type="password" name="pass" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
					<input type="submit" class="login100-form-btn">
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Esqueceu
						</span>
						<a class="txt2" href="#">
							Email / Senha?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="<?=BASE_URL?>login/cadastro">
							Crie sua conta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?=BASE_URL?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=BASE_URL?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=BASE_URL?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=BASE_URL?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=BASE_URL?>assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?=BASE_URL?>assets/js/main.js"></script>

</body>
</html>