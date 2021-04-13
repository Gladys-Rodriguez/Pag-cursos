<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$errors = array();
	
	if(!empty($_POST))
	{
		$nombre = $mysqli->real_escape_string($_POST['nombre']);	
		$apellido_p = $mysqli->real_escape_string($_POST['apellido_p']);
		$apellido_m = $mysqli->real_escape_string($_POST['apellido_m']);
		$tipo_suscripcion = $mysqli->real_escape_string($_POST['tipo_suscripcion']);
		$usuario = $mysqli->real_escape_string($_POST['usuario']);	
		$password = $mysqli->real_escape_string($_POST['password']);	
		$con_password = $mysqli->real_escape_string($_POST['con_password']);	
		$email = $mysqli->real_escape_string($_POST['email']);	
		$captcha = $mysqli->real_escape_string($_POST['g-recaptcha-response']);
		
		$activo = 0;
		$tipo_usuario = 2;
		$secret = '6LfAq-kZAAAAAE-yQlkX24HJ0zdNNMq_jVwvAl7s';
		
		if(!$captcha){
			$errors[] = "Por favor verifica el captcha";
		}
		
		if(isNull($nombre, $apellido_p, $apellido_m, $tipo_suscripcion, $usuario, $password, $con_password, $email))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		if(!isEmail($email))
		{
			$errors[] = "Dirección de correo inválida";
		}
		
		if(!validaPassword($password, $con_password))
		{
			$errors[] = "Las contraseñas no coinciden";
		}
		
		if(usuarioExiste($usuario))
		{
			$errors[] = "El nombre de usuario $usuario ya existe";
		}
		
		if(emailExiste($email))
		{
			$errors[] = "El correo electronico $email ya existe";
		}
		
		if(count($errors) == 0)
		{
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
				
				$pass_hash = hashPassword($password);
				$token = generateToken();
				
				$registro = registraUsuario($usuario, $pass_hash, $nombre, $apellido_p, $apellido_m, $tipo_suscripcion, $email, $activo, $token, $tipo_usuario);
				
				if($registro > 0 )
				{
					
					$url = 'http://'.$_SERVER["SERVER_NAME"].'/prueba/activar.php?id_alumno='.$registro.'&val='.$token;
					
					$asunto = 'Activar Cuenta - Sistema de alumnos';
					$cuerpo = "Estimado $nombre: <br /><br />Para continuar con el proceso de registro, es indispensable de click en la siguiente liga <a href='$url'>Activar Cuenta</a>";
					
					if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
						
						echo "Para terminar el proceso de registro siga las instrucciones que le hemos enviado la direccion de correo electronico: $email";
						
						echo "<br><a href='index.php' >Iniciar Sesion</a>";
						exit;
						
						} else {
						$erros[] = "Error al enviar Email";
					}
					
					} else {
					$errors[] = "Error al Registrar";
				}
				
				} else {
				$errors[] = 'Error al comprobar Captcha';
			}
			
		}
		
	}
	
?>

<!doctype html>
<html lang="es">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome</title>
    	<!-- Bootstrap CSS -->		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<!-- scripts -->
		<script src="js/bootstrap.min.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		
	</head>
	
	<body>
	<header>
			<?php
				require_once('header.php');
				?>
		</header>
		<div class="container">
		<br><br>
					<div class="panel-body" >
						
					<form  role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="on" class="form-resgister">
						<h2 class="form-titulo">CREA UNA CUENTA</h2>
						<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
						</div>
							
							<div class="input-100">
								
								<div class="col-md-12">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
								</div>
							</div>

							<div class="input-100">
								
								<div class="col-md-12">
									<input type="text" class="form-control" name="apellido_p" placeholder="Apellido Paterno"  value="<?php if(isset($apellido_p)) echo $apellido_p; ?>"required >
								</div>
							</div>

							<div class="input-100">
								
								<div class="col-md-12">
									<input type="text" class="form-control" name="apellido_m" placeholder="Apellido Materno"  value="<?php if(isset($apellido_m)) echo $apellido_m; ?>"required >
								</div>
							</div>

							<div class="input-100">
								
								<div class="col-md-12">
									
									<select id="tipo_suscripcion" class="form-control" name="tipo_suscripcion" placeholder="Tipo Suscripción"  value="<?php if(isset($tipo_suscripcion)) echo $tipo_suscripcion; ?>"required >
										<option value="1">Mensual</option>
										<option value="2">Semestral</option>
										<option value="3">Anual</option>
									</select>
								</div>
							</div>

							
							<div class="input-100">
								
								<div class="col-md-12">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
								</div>
							</div>
							
							<div class="input-100">
								
								<div class="col-md-12">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
							</div>
							
							<div class="input-100">
								
								<div class="col-md-12">
									<input type="password" class="form-control" name="con_password" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							<div class="input-100">
								
								<div class="col-md-12">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" required>
								</div>
								
							</div>
							<div class="btn">
								
								<label for="captcha" class="col-md-12 control-label"></label>
								<div class="g-recaptcha col-md-9" data-sitekey="6LfAq-kZAAAAAA24djEo9Fi2SwW16xwd7ZEROPs1"></div>
								
								
</div>
							
							<br>
							
							<div class="btn" >                                      
									<button type="submit" class="btn-enviar">Registrar</button>
									<br>
							</div>
							<br>
							<br>
						</form>
						<?php echo resultBlock($errors); ?>
					</div>
					<p class="form-link">¿Ya tienes una cuenta?<a href="index.php"> Ingresa aquí</a></p>
					<br>
		</div>

		<?php
			require_once('footer.php');
		?>
	</body>
</html>															