<?php
	/* Incluye librerias de conexion y las funiones a utilizar */	
	require '../funcs/conexion.php';
	include '../funcs/func_gerencia/funcs.php';
	/* declaramos variable errores y le asignamos valor de 0 */
	$errors = array();
	/* checamos si el formulario no esta vacio */
	if(!empty($_POST))
	{
		$nombre = $mysqli->real_escape_string($_POST['nombre']);	
		$apellido_p = $mysqli->real_escape_string($_POST['apellido_p']);
		$apellido_m = $mysqli->real_escape_string($_POST['apellido_m']);
		$usuario = $mysqli->real_escape_string($_POST['usuario']);	
		$password = $mysqli->real_escape_string($_POST['password']);	
		$con_password = $mysqli->real_escape_string($_POST['con_password']);	
		$email = $mysqli->real_escape_string($_POST['email']);	
		
		$activo = 1;
		$tipo_usuario = 1;
		/* Se verifican posibles errores a la hora del vaciado en el formulario */
		if(isNull($nombre, $apellido_p, $apellido_m, $usuario, $password, $con_password, $email))
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
		/* Si no hay errores entonces se realiza la insercion de datos con la db */
		if(count($errors) == 0)
		{
				$pass_hash = hashPassword($password);
				$token = generateToken();
				
				$registro = registraUsuario($usuario, $pass_hash, $nombre, $apellido_p, $apellido_m, $email, $activo, $token, $tipo_usuario);
									
					/* Alert de exito al registrar */

				echo '<script language="javascript">alert("';
				echo "Usario Gerencia Registrado";
				echo '");</script>';
		}else {
				$errors[] = "Error al Registrar";
				}				
	}
?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registrar Gerencia</title>


		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<!-- scripts -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		<!-- scripts google-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
			<div class="container">
			<br><br>
			<div class="panel-body" >
				
			<form  role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="on" class="form-resgister">
				<h2 class="form-titulo">REGISTRO GERENCIA</h2>
				<div id="signupalert" style="display:none" class="alert alert-danger">
						<p>Error:</p>
						<span></span>
				</div>
					
					<div class="input-100" style="padding-top: 20px;">
						
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

			</div>
			<!-- fin formulario -->
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