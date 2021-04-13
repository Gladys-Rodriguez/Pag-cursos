<?php
	
/*Importa archivos de conexión y funciones*/
require '../funcs/conexion.php';
include '../funcs/func_gerencia/funcs.php';
	

	session_start();
	
	/*Comprobación de sesión exitosa manda a home*/

	if(isset($_SESSION["id_usuario"])){
		header("Location: welcome.php");
	}
	
	$errors = array();
	/*Comprobación de correo válido*/

	if(!empty($_POST))
	{
		$email = $mysqli->real_escape_string($_POST['email']);
		
		if(!isEmail($email))
		{
			$errors[] = "Debe ingresar un correo electronico valido";
		}
		
		if(emailExiste($email))
		{			
			$user_id = getValor('id_gerencia', 'correo', $email);
			$nombre = getValor('nombre', 'correo', $email);
			
			$token = generaTokenPass($user_id);
			
			/*Envío de link para restauración de contraseña*/	

			$url = 'http://'.$_SERVER["SERVER_NAME"].'/smart/academia/cambia_pass.php?user_id='.$user_id.'&token='.$token;
			
			$asunto = 'Recuperar Password - Sistema de Usuarios';
			$cuerpo = "Hola $nombre: <br /><br />Se ha solicitado un reinicio de contrase&ntilde;a. <br/><br/>Para restaurar la contrase&ntilde;a, visita la siguiente direcci&oacute;n: <a href='$url'>$url</a>";
			
			if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
				echo "Hemos enviado un correo electronico a las direcion $email para restablecer tu password.<br />";
				echo "<a href='index_gerencia.php' >Iniciar Sesion</a>";
				exit;
			}
			} else {
			$errors[] = "La direccion de correo electronico no existe";
		}
	}
	
?>

<!-- Inicio de Página-->
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ingreso Academia</title>


		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
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
						require_once('header_academia.php');
					?>
					
			</div>
			<!-- end navbar -->
			<!-- comienza formulario -->
			<br><br>
		
		<div class="container">				
			<div class="panel-body" >
				<br><br>
				<p class="form-link">Aun no tienes  cuenta &nbsp; <a href="registro.php">Registrate aquí</a></p>
				<div id="signupalert" style="display:none" class="alert alert-danger">
						<p>Error:</p>
						<span></span>
				</div>
				
				<form class="form-resgister" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="on" >
				<h2 class="form-titulo">Recuperar Password</h2>
					
					<div style="margin-bottom: 25px; padding-top: 20px;" class="input-100">
						
						<input style="font-size: 20px;" id="email" type="email" class="form-control" name="email" placeholder="Correo electr&oacute;nico" required>                                        
					</div>
					
					<div class="btn" > 
															
							<button type="submit" class="btn-enviar">Enviar</button>
							<br><br><br>
					</div>
					
						
				</form>
				<div class="form-link"><br><a href="index_gerencia.php">Iniciar Sesi&oacute;n</a></div>
				<br><br>
				<?php echo resultBlock($errors); ?>
			</div>                     
				
		</div>
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