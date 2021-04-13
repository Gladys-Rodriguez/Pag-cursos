
<!doctype html>
<html lang="es">
	<head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        
    	<!-- Bootstrap CSS -->		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <link rel="stylesheet" href="css/styles.css">

		<!-- scripts -->
		<script src="js/bootstrap.min.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


          <div class="container-fluid" style="border: 0px; margin: 0px; padding:0px; width:100%;">
					<?php
						require_once('header_alumnos.php'); //
					?>
			</div>
          
	</head>
	
	<body>

    
    <main class="container"> <!--Clase para utilizar las 12 columnas de la pagina-->
        <div class="row">
        <div class="col-6">
	   
        <div class="jumbotron" class="pt-4">
         
          
            <?php

            if(!$POST ){

                //Alerta para no dejarlo avanzar hasta que termine de contestar el ejercicio 
            }
            global $mysqli;
                
            
                $idUsuario = $_SESSION['id_usuario'];

            for($i=0;$i<=36; $i++){

                $Respuesta=$_POST["$i"];
                //echo 'el valor de la primera respuesta es '.$Respuesta;   
                
                $stmt = $mysqli->query("INSERT INTO respuestas_ejercicios VALUES ($idUsuario, $i, $Respuesta)");
            }
        

            $validacion0 = $mysqli->query("SELECT * FROM respuestas_ejercicios WHERE  id_alumno=$idUsuario and pregunta BETWEEN  1 and 20");
            $row0 = $validacion0->fetch_assoc();
            $val0=$row0['pregunta'];

            if($val0 != null){

                $resultado = $mysqli->query("SELECT * FROM respuestas_ejercicios WHERE  id_alumno=$idUsuario and pregunta BETWEEN  1 and 20");
                foreach($resultado as $fila){
                    $suma= $fila['respuesta']+$suma;
                }
                echo '<br/>'.'<br/>'.'Obtuviste '.$suma.' respuestas correctas en la seccion A';
                $op1=($suma*10)/20; 
                echo '<br/>'.'Tu calificacion es de '.$op1.' para la seccion A';
            }





            $validacion = $mysqli->query("SELECT * FROM respuestas_ejercicios WHERE  id_alumno=$idUsuario and pregunta BETWEEN  21 and 24");
            $row = $validacion->fetch_assoc();
            $val=$row['pregunta'];
            

            if($val != null){

                $lessonB = $mysqli->query('SELECT * FROM respuestas_ejercicios WHERE pregunta BETWEEN  21 and 24');
                foreach($lessonB as $fila){
                    $sumaB= $fila['respuesta']+$sumaB;
                }  
                echo '<br/>'.'<br/>'.'Obtuviste '.$sumaB.' respuestas correctas en la leccion B';
                $op2=(($sumaB+4)*10)/8; 
                echo '<br/>'.'Tu calificacion es de '.$op2.' para la seccion B'.'<br/>';
                
            }

            $validacion2 = $mysqli->query("SELECT * FROM respuestas_ejercicios WHERE  id_alumno=$idUsuario and pregunta BETWEEN  25 and 36");
            $row2 = $validacion2->fetch_assoc();
            $val2=$row2['pregunta'];
            
            if($val2 != null){

                $lessonC = $mysqli->query("SELECT * FROM respuestas_ejercicios WHERE  id_alumno=$idUsuario and pregunta BETWEEN  25 and 36");
                foreach($lessonC as $fila){
                    $sumaC= $fila['respuesta']+$sumaC;
                }  
                echo '<br/>'.'<br/>'.'Obtuviste '.$sumaC.' respuestas correctas en la leccion C';
                $op3=($sumaC*10)/11; 
                echo '<br/>'.'Tu calificacion es de '.$op3.' para la seccion C'.'<br/>';

            }
            

            ?>
            </br>
		    <br/>
        </div>
        </div>
        
        <div class="col-6">
         <img src="img/niña_feliz.jpg" width="620" height="500"  class="float-center pt-5" >
        </div>
        <div class="col-12">
         </br>
        </div>
           

	 </div>
    </main> 

        <?php
			require_once('footer.php');
		?>
	</body>
</html>		



