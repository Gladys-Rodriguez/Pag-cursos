<?php
	
	session_start(); //Iniciar una nueva sesión o reanudar la existente
    session_destroy(); //Destruye la sesión
  
    header('location: index_profes.php'); //Redirecciona la inicio
	
?>