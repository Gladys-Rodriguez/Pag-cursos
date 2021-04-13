<?php

$mysqli=new mysqli("127.0.0.1","root","","prueba"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

/* include 'config.php';
$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
try{
		$mysqli= new PDO($servidor,USUARIO,PASSWORD,
				array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
		);

		echo "<script>alert('Conectado')</script>";
	}catch(PDOException $e){
		echo "<script>alert('Error en la conexion')</script>";
	} */

?>