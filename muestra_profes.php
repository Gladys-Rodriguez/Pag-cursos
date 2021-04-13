
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			Selección Profesores
		</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<!-- scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		<!-- para ocultar o mostrar -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 

		
	</head>
	
	<body>
		<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px;">
			<!-- start navbar -->
			<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px; width:100%;">
					<?php
						require_once('header_Alumnos.php');
					?>
			</div>
			<!-- end navbar -->
			<div class="row" style="padding: 0px 0px;">

				<?php
					$sql="SELECT * FROM profesores";
					$resultado=mysqli_query($mysqli,$sql);


					while($mostrar=mysqli_fetch_array($resultado))
					{?>	
						
					<div  class="col-sm-12 col-md-3 col-lg-3 mx-auto" style="margin: 5px; padding: 5px 5px; border-radius: 5px;">
						<div  class="card" style="position: relative;">
								<img src="img/usuario.jpg" style="padding: 5px 10px; border-radius: 5px; height:210px; width:200px;display:block; margin:auto;">
							<div class="card-body">
								<h5 style="text-align:center;"><?php echo $mostrar['nombre']." ".$mostrar['apellido_p']?></h5>
								<?php
									$id_profesor = $mostrar['id_profesor'];
									$nombre_profe = $mostrar['nombre'];
									$apellido_p_profe = $mostrar['apellido_p'];
								?>
								   
									<br>
									<div class="w-100 p-2 position-static top-50 start-50 rounded-pill bg-info text-light" >
									<form action="" method=post style="text-align:center;">

										<input type="text" name="id_profesor" value="<?php echo $mostrar['id_profesor'] ?>" style="display:none" >
										<input type="text" name="nombre" value="<?php echo $mostrar['nombre'] ?>" style="display:none">
										<input type="text" name="apellido_p" value="<?php echo $mostrar['apellido_p'] ?>" style="display:none">  
										<input type="text" name="apellido_p" value="<?php echo $row['id_alumno'] ?>" style="display:none">                                
										<!-- Se pasan las variables a la siguiente pagina  -->
										<a style="color:white;"href="profe_agendar.php?id_profesor=
										<?php echo urlencode($mostrar['id_profesor']);?>
										&id_alumno=<?php echo $id_alumno;?>
										&nombre_profe=<?php echo $nombre_profe;?>
										&apellido_p_profe=<?php echo $apellido_p_profe;?>">Agendar</a>

									</form> 

									
									</div>
									
															
							</div>
						</div> 
					</div>
						
				<?php
					}
				?>
			</div>

			
					<!-- comienza cartas profesores -->
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