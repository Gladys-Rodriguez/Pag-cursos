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
		

	</head>
	
	<body>

    <div class="container-fluid" style="border: 0px; margin: 0px; padding:0px; width:100%;">
					<?php
						require_once('header_alumnos.php'); //
					?>
			</div>
    <main class="container"> <!--Clase para utilizar las 12 columnas de la pagina-->
        <div class="row">
        <div class="col-6">
	    
        </br>
        <div class="jumbotron" class="pt-4">

            <?php

            if(!$POST ){
//
                //Alerta para no dejarlo avanzar hasta que termine de contestar el ejercicio 
            }
            global $mysqli;
                
    
                
                $idUsuario = $_SESSION['id_usuario'];

            for($i=0;$i<=26; $i++){

                $Respuesta=$_POST["$i"];
               // echo 'el valor de la primera respuesta es '.$Respuesta;
                if($i>8 && $i<12){
                    if($Respuesta='Hello'||$Respuesta='Hi'||$Respuesta='How are you?'){   
                            $Respuesta=1;     
                    }
                    else{
                            $Respuesta=0;
                    }
                }
                if($i>11 && $i<15){
                    if($Respuesta='Bye'||$Respuesta='See you'||$Respuesta='Good-bye'){
                            $Respuesta=1;
                    }
                    else{
                            $Respuesta=0;
                    }
                }    
                
                $stmt = $mysqli->query("INSERT INTO respuestas_unidades VALUES ($idUsuario, $i, $Respuesta)");
            }



            $resultado = $mysqli->query("SELECT * FROM respuestas_unidades WHERE  id_alumno=$idUsuario and pregunta BETWEEN  1 and 14");
            foreach($resultado as $fila){
                $suma= $fila['respuesta']+$suma;
            }
            echo '<br/>'.'<br/>'.'Obtuviste '.$suma.' respuestas correctas en la seccion A';          
            $op1=($suma*10)/14; 
            echo '<br/>'.'Tu calificacion es de '.$op1.' para la seccion A';


//**************************** */

            $validacion = $mysqli->query("SELECT * FROM respuestas_unidades WHERE  id_alumno=$idUsuario and pregunta BETWEEN  15 and 26");
            $row = $validacion->fetch_assoc();
            $val=$row['pregunta'];
            

            if($val != null){
                 
                $lessonB = $mysqli->query("SELECT * FROM respuestas_unidades WHERE  id_alumno=$idUsuario and pregunta BETWEEN  15 and 26");
                foreach($lessonB as $fila){
                    $sumaB= $fila['respuesta']+$sumaB;
                }  
                echo '<br/>'.'<br/>'.'Obtuviste '.$sumaB.' respuestas correctas en la leccion B';
                $op2=($sumaB*10)/11; 
                echo '<br/>'.'Tu calificacion es de '.$op2.' para la seccion B'.'<br/>';

            }
                
//************************** */




            /*$lessonB = $mysqli->query('SELECT * FROM respuestas_unidades WHERE pregunta BETWEEN  15 and 26');
            foreach($lessonB as $fila){
                $sumaB= $fila['respuesta']+$sumaB;
            }  
            echo '<br/>'.'<br/>'.'Obtuviste '.$sumaB.' respuestas correctas en la leccion B';
            $op2=($sumaB*10)/11; 
            echo '<br/>'.'Tu calificacion es de '.$op2.' para la seccion B'.'<br/>';
            */

            ?>

         </br>
         <br/>
        </div>
        </div>
        
        <div class="col-6">
         <img src="img/niño_feliz.jpg" width="620" height="500"  class="float-center pt-5" >
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



