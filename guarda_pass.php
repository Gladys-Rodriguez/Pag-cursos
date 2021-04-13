<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$user_id = $mysqli->real_escape_string($_POST['user_id']);
	$token = $mysqli->real_escape_string($_POST['token']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$con_password = $mysqli->real_escape_string($_POST['con_password']);
	

	if(validaPassword($password, $con_password))
	{
		$pass_hash = hashPassword($password);
		
		if(cambiaPassword($pass_hash, $user_id, $token))
		{
			echo "Contrase&ntilde;a Modificada <br> <a href='index_alumnos.php' >Iniciar Sesion</a>";
			} else {
			echo "Error al modificar contrase&ntilde;a";
		}
		} else {
		echo "Las contraseñas no coinciden <br> <a href='index_alumnos.php' >contacta a Academia</a>";
	} 

/* 	function cambio( string $res){

		
		if(validaPassword($password,$con_password))
		{
			$pass_hash = hashPassword($password);
			
			if(cambiaPassword($pass_hash, $user_id, $token))
			{
				$res =  "Contrase&ntilde;a Modificada <br> <a href='index_alumnos.php' >Iniciar Sesion</a>";
				} else {
				$res =  "Error al modificar contrase&ntilde;a";
			}
			} else {
				$res =  "Las contraseñas no coinciden <br> <a href='index_alumnos.php' >contacta a Academia</a>";
		}
		$mostrar = cambio($res);
	} */
	
	


?>	

<!-- Inicio de Página-->
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Guardar Contraseña</title>


		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<!-- scripts -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		<!-- scripts google-->
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>

	<body>
		<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
					
					<!-- start navbar -->
			<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
					<?php
						require_once('header.php');
					?>
					
			</div>
			<!-- end navbar -->
			<!-- inicia msn -->
			<div class="input_100">
				<?php /* echo($mostrar) */ ?>
			</div>
			<br><br>
			<!-- start footer -->
			<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
				<br><br>
				<?php
					require_once('footer.php');
				?>
				<!-- end footer -->
			</div>
		</div>			
	</body>
</html>	