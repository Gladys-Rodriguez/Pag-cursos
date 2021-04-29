<?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	/* if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index_alumnos.php
		header("Location: index_alumnos.php");
	} */
	
	$idUsuario = $_SESSION['id_usuario'];
	
	$sql = "SELECT id_alumno, nombre, apellido_p FROM alumnos WHERE id_alumno = '$idUsuario'";
	$result = $mysqli->query($sql);
	
	$row = $result->fetch_assoc();
    if(isset($row['nombre'])){
    $nombre_alumno=$row['nombre'];}
    if(isset($row['id_alumno'])){
    $id_alumno=$row['id_alumno'];}

?>

<nav class="navbar navbar-expand-lg navbar-light">
    <img src="img/C/LogoC.png" alt="">
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
               <!-- <a class="dropdown-item" href="muestra_profes.php">Asesorias</a>-->
                
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


            <div class="encabezado">
                <br>
				<h2>  <?php echo 'Bienvenid@ '.$row['nombre']. ' '. $row['apellido_p']; ?>  </h1>
				<br/>
			</div>