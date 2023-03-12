<!-- POPUP -->

<?php
   session_start();
   if ($_SESSION['user_mau_bd']) {
      header('Location: profile.php');
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mercado de artesanía ucraniana | Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-ES-Compatible" content="IE=edge">
	<meta name="description" content="La tienda National de Ucrania, mercado de artesania ucraniana">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="La tienda, de Ucrania, mercado de artesania ucraniana, Ámbar natural, Camisa bordada, Pinturas, el souvenir de Ucrania">
	<link rel="icon" type="img" href="images/img1/8-1.png">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="popup/popup.css">
	</head>
<body>

<div class="popup__bg">
		<div class="popup">
			<img class="close__popup" src="popup/img/close.png" alt="icon">
			<div class="form">
				<h1>Entrar</h1>
				<div class="input-form">
						<form action="#" method="post">
						<input type="text" name="email" id="email" placeholder="Email">
						</form>
					</div>
					<div class="input-form">
						<input type="password" name="pass" id="pass" 
						placeholder="Contraseña">
					</div>
					<div class="input-form">
						<input type="submit" value="inicia sesión">
					</div>
				<div class="forget">
					<a href="#">¿Has olvidado la contraseña?</a>
					<a href="registro/register.php">registro</a>
				</div>
			</div>
		</div>
	</div>

   <script src="registro/assets/js/jquery-3.4.1.min.js"></script>
   <script src="registro/assets/js/main.js"></script>
   <script src=" popup/popup.js"></script>

   </body>
</html