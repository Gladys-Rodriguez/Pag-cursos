<?php
	
	require '../funcs/conexion.php';
	include '../funcs/func_academia/funcs.php';
	
	if(isset($_GET["id_academia"]) AND isset($_GET['val']))
	{
		
		$idUsuario = $_GET['id_academia'];
		$token = $_GET['val'];
		
		$mensaje = "Cuenta activada";	
	}
?>

<html>
	<head>
		<title>Activación</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css" >
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		<div class="container">
			<div class="jumbotron">
				
				<h1><?php echo $mensaje; ?></h1>
				
				<br />
				<p><a class="btn btn-primary btn-lg" href="index_academia.php" role="button">Iniciar Sesi&oacute;n</a></p>
			</div>
		</div>
	</body>
</html>														