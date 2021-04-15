<?php
	/* Incluye librerias de conexion y las funiones a utilizar */
	require '../funcs/conexion.php';
	include '../funcs/func_gerencia/funcs.php';
	
	session_start(); //Iniciar una nueva sesión o reanudar la existente
	
	if(isset($_SESSION["id_usuario"])){ //En caso de existir la sesión redireccionamos
		header("Location: welcome.php");
	}
	
	$errors = array();
	
	if(!empty($_POST))
	{
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);
		
		if(isNullLogin($usuario, $password))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		$errors[] = login($usuario, $password);	
	}
	
?>
<!doctype html>
<html lang="es">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			gerencia
		</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

	</head>
	
	<body>
		<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
					
					<!-- start navbar -->
			<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
					<?php
						require_once('header_gerencia_index.php');
					?>
					<!-- end navbar -->
			</div>
					<!-- comienza formulario -->
			<div class="container">
			<br><br>
				<div class="panel-body">

					<form  role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off" class="form-resgister">
					<h2 class="form-titulo">Ingreso Gerencia</h2>
					<div id="signupalert" style="display:none" class="alert alert-danger">
							<p>Error:</p>
							<span></span>
					</div>					
						<div class="input-100" style="padding-top: 20px;">						
							<div class="col-md-12" >						
							<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario o email" required>
							</div>
						</div>

						<div class="input-100">
							<br>
							<div class="col-md-12 ">
							<input id="password" type="password" class="form-control" name="password" placeholder="password" required>
							</div>
						</div>
						
						<br>
						<div class="btn" >                                     
								<button type="submit" class="btn-enviar">Iniciar Sesi&oacute;n</button>
								<br>
						</div>
						<br>
						<br>
					</form>
					<!-- fin formulario -->

					<div class="form-link"><a href="recupera.php">¿Se te olvid&oacute; tu contraseña?</a></div>
					<?php echo resultBlock($errors); ?>
				</div>
			</div>
					<br>			
			<!-- start footer -->
			<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
				<br>
				<?php
					require_once('footer.php');
				?>
				<!-- end footer -->
			</div>
		</div>			
	</body>
</html>							