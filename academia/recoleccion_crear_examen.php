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
<html lang="en">
  <head>
        <title>Admin BS</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <link rel="stylesheet" href="css/styles.css">


        <!-- scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <!-- scripts google-->
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="../js/forms_registrar.js"> </script>
    
        <?php
              //require_once('header_alumnos.php'); 
              require_once('header_academia.php');
					?>
      </head>

  <div class="jumbotron">
    
  </div>

<body class="h-100 alumnos">  

     <!-- <div class="jumbotron">
				<h2>    </h1>
				<br />
			</div> -->

<main class="container">
    <div class="row">
          <div class="col-12">
                

          <?php

                 // if(!$POST ){
                
                  //}
                  global $mysqli;
                                   
                  $idUsuario = $_SESSION['id_usuario'];//
                  
                  $examen=$_POST['exa'];
                  //echo $examen; 

                  $aux=11;
                 // $pregunta=$_POST['1']; 
                  //$i=1;
                 // $respuesta=$_POST['11']; 

                 // echo $pregunta.' '.$respuesta;
                 // $insertar = $mysqli->query("INSERT INTO crear_examen VALUES ($examen,$i, '$pregunta', '$respuesta')");


                  for($i=1;$i<=10; $i++){
                    
                    
                    $pregunta=$_POST["$i"]; 
                    
                    //echo $aux.' '.$i.'<br/>';
                    $respuesta=$_POST["$aux"]; 
                    $insertar = $mysqli->query("INSERT INTO crear_examen VALUES ($examen,$i, '$pregunta', '$respuesta',null)");
                    //echo $i.'<br/>';
                    //echo $aux.'<br/>';
                    $aux=$aux+1;
                  } 


                 /* $validacion = $mysqli->query('SELECT * FROM respuestas_unidades');
                  
                  foreach ($validacion as $fila) {
                    echo $fila['id_alumno'].' '. $fila['pregunta'].'<br/>';

                  }*/
                  
              
                  ?>
          </div>
          
          <div >
            <h2>El examen se ha subido exitosamente</h2>
          </div>

    </div>
    
</main>

  <br/>
<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
          
          <?php
            require_once('footer.php');
          ?>
          <!-- end footer -->
        
  </div>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    
  </body>
</html>