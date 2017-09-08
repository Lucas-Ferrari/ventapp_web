<?php 	
	// include $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/controllers/connect.php';
	include $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/Model.php'
	
?>
<!DOCTYPE html>
<html>
<head>
	<title> . : VENTAPP LogIn : .</title>
	<link rel="stylesheet" type="text/css" href="/ventapp_web_desa/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/ventapp_web_desa/css/estilos.css">
	<meta charset="utf-8">
</head>
<body class="login">
	<section class="secLogin">
		<form class="formLogin" action=" " method="POST">
			<span>Iniciar sesión:</span><br />
			<label for="usr" class="lbls">Usuario:</label>
			<input type="text" name="usr" id="usr" minlength="5" maxlength="16" placeholder="Ingrese su usuario..." class="inps"></input>
			<br />
			<label for="pwd" class="lbls">Contraseña:</label>
			<input type="password" name="pwd" id="pwd" minlength="5" maxlength="16" placeholder="Ingrese su contraseña..." class="inps"></input>
			<br />
			<button type="submit" class="btns">Iniciar sesión</button>
			<input type="reset" class="btns"></input>
		</form>
	</section>
</body>
</html>