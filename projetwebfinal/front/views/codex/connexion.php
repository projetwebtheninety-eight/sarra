			<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $_SESSION['connect']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="favicon.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="connexion/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="connexion/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="connexion/css/main.css">
<!--===============================================================================================-->
</head>	




<body>
             <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="views/verifInfoAbonne.php">
					<span class="login100-form-title p-b-32">
						Connexion
					</span>
					<span class="txt1 p-b-11">
					<h6><?php if(isset($_SESSION['connect'])){ if($_SESSION['connect'] == "connexion1"){ echo "<p style='color:red;'>Login ou Mot de passe incorect !! Reesayez</p>";}}?></h6>
                    
					</span>
					<span class="txt1 p-b-11">
						Login
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="email" name="email" >
						
					</div>
					
					<span class="txt1 p-b-11">
						Mot de passe
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Champ obligatoire">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Souviens-toi de moi
							</label>
						</div>

						<div>
							<a href="404-page.php?connect=recuperation" class="txt3">
								Mot de passe oublié?
							</a>
							</br>
							<a href="index.php" class="txt3">
								Retourner a la page d'accueil <=
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Confirmer
						</button>
					</div>
				</div>
			</div>

				</form>


				<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="connexion/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/bootstrap/js/popper.js"></script>
	<script src="connexion/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/daterangepicker/moment.min.js"></script>
	<script src="connexion/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="connexion/js/main.js"></script>
	<script src="js/controle.js"></script>

</body>
</html>