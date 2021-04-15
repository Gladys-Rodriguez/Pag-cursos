<?php
	session_start();
	/* Incluye librerias de conexion y las funiones a utilizar */	
	require '../funcs/conexion.php';
	include '../funcs/func_profes/funcs.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index_profesores.php
		header("Location: index_profes.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
	
	$sql = "SELECT id_profesor, nombre FROM profesores WHERE id_profesor = '$idUsuario'";
	$result = $mysqli->query($sql);
	
	$row = $result->fetch_assoc();


?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			Profesores
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
				require_once('header_profes.php');
				?>
		</header>
		<div class="container">
			<div class="row">
			
			<div class="jumbotron">
				<h2><?php echo 'Prof. '.utf8_decode($row['nombre']); ?></h1>
				<br />
			</div>

			<div class="col-6">
				<?php 
				
				$consul = $mysqli->query('SELECT A.id_alumno, nombre, apellido_p,  calificacion FROM calificaciones_finales A 
				INNER JOIN alumnos B on A.id_alumno= B.id_alumno');
				  
				echo 'ID'.' '.'Nombre '.' Calificacion'.'<br/>'.'<br/>'; 

				if (is_array($consul) || is_object($consul))
				{
					foreach ($consul as $fila) {
						echo $fila['id_alumno'].' '.$fila['nombre'].' '.$fila['apellido_p'].' '.$fila['calificacion'].'<br/>';
					  } 
				}
				
				
				
				?>
				<br />
			</div>

				<div class="col-6">
				<?php 
				
				$consul = $mysqli->query('SELECT status FROM calificaciones_finales Where status=1');
					
				echo '<br/>';
				echo '<br/>';
				$suma=0;

				if (is_array($consul) || is_object($consul))
				{
					foreach ($consul as $fila) {

						$suma=$suma+ $fila['status'];
					}
				}
					 
				echo 'Hay '.$suma. ' Alumno/s que han acreditado el curso ';	
				?>
				</div>

			</div>
		</div>
		<div>
			<?php
function mostrar_calendario($mes,$ano){
	//tomo el nombre del mes que hay que imprimir
	$nombre_mes = dame_nombre_mes($mes);
	
	//construyo la tabla general
	echo '<table class="tablacalendario" cellspacing="3" cellpadding="2" border="0">';
	echo '<tr><td colspan="7" class="tit">';
	//tabla para mostrar el mes el año y los controles para pasar al mes anterior y siguiente
	echo '<table width="100%" cellspacing="2" cellpadding="2" border="0"><tr><td class="messiguiente">';
	//calculo el mes y ano del mes anterior
	$mes_anterior = $mes - 1;
	$ano_anterior = $ano;
	if ($mes_anterior==0){
	   $ano_anterior--;
	   $mes_anterior=12;
	}
	echo '<a href="welcome.php?nuevo_mes=' . $mes_anterior . '&nuevo_ano=' . $ano_anterior .'"><span>-;</span></a></td>';
	 echo '<td class="titmesano">' . $nombre_mes . " " . $ano . '</td>';
	 echo '<td class="mesanterior">';
	//calculo el mes y ano del mes siguiente
	$mes_siguiente = $mes + 1;
	$ano_siguiente = $ano;
	if ($mes_siguiente==13){
	   $ano_siguiente++;
	   $mes_siguiente=1;
	}
	echo '<a href="welcome.php?nuevo_mes=' . $mes_siguiente . '&nuevo_ano=' . $ano_siguiente . '"><span>+</span></a></td>';
	//finalizo la tabla de cabecera
	echo '</tr></table>';
	echo '</td></tr>';
	//fila con todos los días de la semana
	echo '   <tr>
			 <td width="14%" class="diasemana"><span>L</span></td>
			 <td width="14%" class="diasemana"><span>M</span></td>
			 <td width="14%" class="diasemana"><span>X</span></td>
			 <td width="14%" class="diasemana"><span>J</span></td>
			 <td width="14%" class="diasemana"><span>V</span></td>
			 <td width="14%" class="diasemana"><span>S</span></td>
			 <td width="14%" class="diasemana"><span>D</span></td>
		  </tr>';
	
	//Variable para llevar la cuenta del dia actual
	$dia_actual = 1;
	
	//calculo el numero del dia de la semana del primer dia
	$numero_dia = calcula_numero_dia_semana(1,$mes,$ano);
	//echo "Numero del dia de demana del primer: $numero_dia <br>";
	
	//calculo el último dia del mes
	$ultimo_dia = ultimoDia($mes,$ano);
	
	//escribo la primera fila de la semana
	echo "<tr>";
	for ($i=0;$i<7;$i++){
	   if ($i < $numero_dia){
		  //si el dia de la semana i es menor que el numero del primer dia de la semana no pongo nada en la celda
		  echo '<td class="diainvalido"><span></span></td>';
	   } else {
		  echo '<td class="diavalido"><span>' . $dia_actual . '</span></td>';
		  $dia_actual++;
	   }
	}
	echo "</tr>";
	
	//recorro todos los demás días hasta el final del mes
	$numero_dia = 0;
	while ($dia_actual <= $ultimo_dia){
	   //si estamos a principio de la semana escribo el <TR>
	   if ($numero_dia == 0)
		  echo "<tr>";
	   echo '<td class="diavalido"><span>' . $dia_actual . '</span></td>';
	   $dia_actual++;
	   $numero_dia++;
	   //si es el uñtimo de la semana, me pongo al principio de la semana y escribo el </tr>
	   if ($numero_dia == 7){
		  $numero_dia = 0;
		  echo "</tr>";
	   }
	}
	
	//compruebo que celdas me faltan por escribir vacias de la última semana del mes
	for ($i=$numero_dia;$i<7;$i++){
	   echo '<td class="diainvalido"><span></span></td>';
	}
	
	echo "</tr>";
	echo "</table>";
 }

			?>
		</div>
			

		
		<?php
			require_once('footer.php'); 
		?> 
		
	</body>
</html>		