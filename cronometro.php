
<!-- Inicio de Página-->
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Fin del examen</title>


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

			
	
<nav class="navbar navbar-expand-lg navbar-light">
    <img src="img/C/logoC.png" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
                <a class="nav-link" href="Alumnos.php">Alumnos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Secciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Alumnos_Unidades.php">Lecciones</a>
                <a class="dropdown-item" href="Alumnos_Ejercicios.php">Ejercicios</a>
                <a class="dropdown-item" href="inicio_examen.php">Practicas</a>
               
                
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
            <li>
                <a class="nav-link" href='logout.php'>Cerrar Sesi&oacute;n</a>
            </li>
            
        </ul>
    </div>
</nav>
				<div class="jumbotron" class="pt-4">
						<h2 class="display-3">Congratulations you have finished your exam</h2>
				</div>

		<div class="container">	
			<div class="row">
			
			
				<div class="col-12">
					</br>
					</br>

					
					
					</br>
					

				</div>

				<div>
				<?php

						//	if(!$POST ){

								//Alerta para no dejarlo avanzar hasta que termine de contestar el ejercicio 
						//	}
							global $mysqli;
								
							session_start();
								require 'funcs/conexion.php';
								include 'funcs/funcs.php';
								
								$idUsuario = $_SESSION['id_usuario'];
								$suma = 0;

							for($i=0;$i<=10; $i++){

								$Respuesta=$_POST["$i"] ?? "";
								//echo 'el valor de la primera respuesta es '.$Respuesta;   						
								$stmt = $mysqli->query("INSERT INTO examen VALUES ($idUsuario, $i, $Respuesta)");
							}

							$resultado = $mysqli->query('SELECT * FROM examen');
							foreach($resultado as $fila){
								
								 $suma= $fila['respuesta'] + $suma ;
							}
							//echo '<br/>'.'Obtuviste '.$suma.' respuestas correctas';
							//echo '<br/>';
							$op1=($suma*10)/5; 
							echo '<br/>'.'Tu calificacion es de '.$op1;						
						?>

					</br>
					</br>
					</br>
					</br>
					</br>
					</br>
					
				</div>

			</div>
		</div>
						
		
			<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
				<?php
					require_once('footer.php');
				?>
				<!-- end footer -->
			</div>			
	</body>
	
</html>		