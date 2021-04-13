<?php
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
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
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			Home
		</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css">
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
						require_once('header.php');
					?>
					<!-- end navbar -->
			</div>

			<!-- comienza slider-->	
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xl-12" style="border: 0px; margin: 0px; padding:0px"  >

					<div id="myCarousel" class="carousel slide">

					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li class="item1 active"></li>
						<li class="item2"></li>
						<li class="item3"></li>
						<li class="item4"></li>
						<li class="item5"></li>
					</ul>
					
					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active" >
							<a href="registro.php"><img src="img/ins.gif" alt="Alumnos" width="100%" height="100%"></a>
						</div>
						<div class="carousel-item">
						<a href="registro_profe.php"><img src="img/profe.png" alt="ingresa" width="100%" height="100%"></a>
						</div>
						<div class="carousel-item">
						<a href=""><img src="img/person.gif" alt="profes" width="100%" height="100%"></a>
						</div>
						<div class="carousel-item">
						<a href=""><img src="img/slider_in.png" alt="contacto" width="100%" height="100%"></a>
						</div>
						<div class="carousel-item">
						<a href=""><img src="img/questions.gif" alt="preguntas" width="100%" height="100%"></a>
						</div>
					</div>
					
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#myCarousel">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#myCarousel">
						<span class="carousel-control-next-icon"></span>
					</a> 
					</div>
					</div>	

					<script>
					$(document).ready(function(){
					// Activate Carousel
					$("#myCarousel").carousel();
						
					// Enable Carousel Indicators
					$(".item1").click(function(){
						$("#myCarousel").carousel(0);
					});
					$(".item2").click(function(){
						$("#myCarousel").carousel(1);
					});
					$(".item3").click(function(){
						$("#myCarousel").carousel(2);
					});
					$(".item4").click(function(){
						$("#myCarousel").carousel(3);
					});
					$(".item5").click(function(){
						$("#myCarousel").carousel(4);
					});
						
					// Enable Carousel Controls
					$(".carousel-control-prev").click(function(){
						$("#myCarousel").carousel("prev");
					});
					$(".carousel-control-next").click(function(){
						$("#myCarousel").carousel("next");
					});
					});
					</script>
			</div>
			<!-- fin slider-->
			<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px 20px">

			<div class="row">
				<div id="div_texto" class="col-sm-12 col-md-12 col-lg-7 col-xs-7 justify-content-center align-self-center ">
					<div id="texto" class="p-3 mb-2 bg-danger text-white justify-content-center container-fluid text-30px " >
						<h3>
						Contamos con profesores capacitados que estan ansiosos por ayudarte en tu camino al éxito.
						</h3>
					</div>
				</div>

				<div id="div_fotos" class="col-sm-12 col-md-12 col-lg-5 col-xs-5 justify-content-center ">
					<img src="img/profe_2.jpg" alt="" class="img-fluid border" >
				</div>
			</div>
		</div>	
		<!--Inicia banner-->
			<br>
			<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 justify-content-center align-self-center bg-info" style="padding-top: 20px;">
					
						<img src="img/suena.gif" alt="banner_2" class="img-fluid" >
					</div>
			</div>
		<!--Fin banner-->

		<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px 20px">
	
			<!-- class="img-fluid border  border-danger "   esto para poner bordes -->
			<div class="row">
				<div id="div_fotos" class="col-sm-12 col-md-12 col-lg-5 col-xs-5 justify-content-center ">
					<img src="img/me_gusta.png" alt="" class="img-fluid border" >
				</div>

				<div id="div_texto" class="col-sm-12 col-md-12 col-lg-7 col-xs-7 justify-content-center align-self-center ">
					<div id="texto" class="p-3 mb-2 bg-info text-white justify-content-center container-fluid text-30px " >
						<h3>
						Bienvenid@ a esta gran aventura, muy pronto te percatarás de lo divertido que puede ser aprender una nueva lengua. 
						</h3>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12" >
					<br>
					<img src="img/flecha.png" alt="hr" width="100%">
				</div>
			</div>
		</div>


		<!--Inicia precios cards-->	
		<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px 30px">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xs-3 justify-content-center align-self-center" style="padding: 40px;">
					<div id="precio">
						<img src="img/mes.png" alt="" class="img-fluid" >
					</div>	
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xs-3 justify-content-center align-self-center" style="padding: 40px;">
					<div id="precio">
						<img src="img/semes.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xs-3 justify-content-center align-self-center " style="padding: 40px;">
					<div id="precio">
						<img src="img/anual.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xs-3 justify-content-center align-self-center " style="padding: 40px;">
					<div id="precio">
					<img src="img/perma.gif" alt=""  class="img-fluid">
					</div>
				</div>
			</div>
		</div>
		<!--Fin precios cards-->		

			<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
				<!-- start footer -->
				<br><br>
				<?php
					require_once('footer.php');
				?>
				<!-- end footer -->
			</div>
		</div>			
	</body>
</html>