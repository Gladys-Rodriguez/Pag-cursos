<?php
	
	require '../funcs/conexion.php';
	include '../funcs/func_academia/funcs.php';
	
	if(empty($_GET['user_id'])){
		header('Location: index_academia.php');
	}
	
	if(empty($_GET['token'])){
		header('Location: index_academia.php');
	}
	
	$user_id = $mysqli->real_escape_string($_GET['user_id']);
	$token = $mysqli->real_escape_string($_GET['token']);
	
	if(!verificaTokenPass($user_id, $token))
	{
		echo 'No se pudo';
		exit;
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
				<div class="panel-body" style="padding-top: 20px;">
					<br><br>
					<p class="form-link">Aun no tienes  cuenta &nbsp; <a href="registro.php">Registrate aquí</a></p>
					
					
					<form class="form-resgister" role="form" action="guarda_pass.php" method="POST" autocomplete="on">
					<h2 class="form-titulo">Cambiar Password</h2>
						
						<input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />
						
						<input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />
						
						<div class="form-group">
							<div class="col-sm-9 col-md-12 col-lg-12 col-xl-12">
								<input style="font-size: 20px;" type="password" class="form-control" name="password" placeholder="Nueva Contraseña" required>
							</div>
						</div>
						
						<div class="form-group">
						
							<div class="col-sm-9 col-md-12 col-lg-12 col-xl-12">

								<input style="font-size: 20px;" type="password" class="form-control" name="con_password" placeholder="Confirmar Contraseña" required>
							</div>
						</div>
						
						<div class="btn" > 
						<br>								
								<button type="submit" class="btn-enviar">Modificar</button>
								<br><br><br>
						</div>  
					</form>
				</div>                     
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