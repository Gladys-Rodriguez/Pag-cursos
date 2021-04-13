<?php
	session_start();
	require '../funcs/conexion.php';
	include '../funcs/func_academia/funcs.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index_academias.php
		header("Location: index_academia.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
	
	$sql = "SELECT id_academia, nombre FROM academias WHERE id_academia = '$idUsuario'";
	$result = $mysqli->query($sql);
	
	$row = $result->fetch_assoc();


?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			Academia
		</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		<script src="../js/forms_registrar.js"> </script>
		

	</head>
	
	<body>
	<header>
			<?php
				require_once('header_academia.php');
				?>
		</header>
		<div class="container-fluid">
			<div class="container ">
				<div class="jumbotron" style="text-align:center;">
					<h2><?php echo 'Administrador '.utf8_decode($row['nombre']); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 bg-info" style="text-align:center;">
					
					<h1>REPORTE DE ALUMNOS</h1>
				
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-12 col-md-3 col-lg-4 bg-primary">
					<span class="translate-middle rounded  bg-primary text-light">	
						<?php
						echo " Total de Alumnos Registrados".ttl_alumnos();
						?>
					</span>	
				</div>
				
			
				<div class="col-sm-12 col-md-3 col-lg-4 bg-info">
					<span class="translate-middle rounded  bg-info text-light">	
						<?php
						//echo " Alumnos Finalizaron curso".ttl_alumnos_fin();
						?>
					</span>
				</div>		
				<div class="col-sm-12 col-md-3 col-lg-4 bg-primary" >
					<span class="translate-middle rounded  bg-primary text-light">	
						<?php
							echo ttl_alumnos_active()."  Alumnos inscritos";
						?>
					</span>
				</div>	

			</div>


			<br>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 bg-info" style="text-align:center;">
					
					<h1>REPORTE DE PROFESORES</h1>
				
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-12 col-md-3 col-lg-4 bg-primary">
					<span class="translate-middle rounded  bg-primary text-light">	
						<?php
						echo " Total de Profesores Activos".ttl_profes();
						?>
					</span>	
				</div>
			</div>
			<?php
				require_once('footer.php'); 
			?> 
		</div>
	</body>
</html>		


