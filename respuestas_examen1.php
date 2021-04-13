
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
    
        <?php
						require_once('header_alumnos.php');
					?>
      </head>

  <div class="jumbotron">
    <h2 class=lecture-title class="display-3 ">Let's to Talk</h2>
  </div>

<body class="h-100 alumnos">  

     <!-- <div class="jumbotron">
				<h2>  <?php echo 'Bienvenid@ '.$row['nombre']. ' '. $row['apellido_p']; ?>  </h1>
				<br />
			</div> -->

<main class="container">
    <div class="row">
      <div class="col-12">
                

      <?php

              if(!$POST ){

              }
              global $mysqli;
                              
              $idUsuario = $_SESSION['id_usuario'];
              $examen=2; //cambiar a 1****************************************
              $aux=0;//***************************************************************me ayudaba a poner una primary key */

              for($i=1;$i<=10; $i++){
         
                $respuesta=$_POST["$i"];    
                //echo $idUsuario.' '. $examen. ' '. $i. ' '. $respuesta. '<br/>';     
                $insertar = $mysqli->query("INSERT INTO respuestas_examen VALUES ( $idUsuario, $examen,$i,'$respuesta',null)");
               // $insertar = $mysqli->query("INSERT INTO respuestas_examen VALUES ( $idUsuario, $examen,$i,'$respuesta',aux)");***********
                $aux=$aux+1;
              } 
       

              //$profesor = $mysqli->query('SELECT * FROM crear_examen');  // lo modifique **************************
              $profesor = $mysqli->query('SELECT * FROM crear_examen WHERE examen=2'); //segunda modificacion 
              //$profesor = $mysqli->query("SELECT * FROM crear_examen WHERE id_alumno=$idUsuario AND examen=2");
              $aux1 = $profesor->fetch_assoc(); //
              
              $var1=array();
              $i=0;

              foreach ($profesor as $fila) {               
                
                $var1[$i]= $fila['respuesta'];
                $i=$i+1;
              }


             // $alumno = $mysqli->query('SELECT * FROM respuestas_examen'); // lo modifique **************************
            // $alumno = $mysqli->query('SELECT * FROM respuestas_examen WHERE examen=2'); 
            $alumno = $mysqli->query("SELECT * FROM respuestas_examen WHERE id_alumno=$idUsuario AND examen=2");
              
            $aux2 = $alumno->fetch_assoc(); 

              $var2= array();
              $j=0;

              foreach ($alumno as $fila) {  
                
                $var2[$j]=$fila['respuesta'];
                $j=$j+1;

              }

              //echo $var1[0];
              //echo $var2[0];
              //echo '<br/>';

              /*$uno=$var1[0];
              $dos=$var2[0];

              echo $uno;
              echo $dos.'<br/>';
              echo strcmp( $uno,$dos).'<br/>';  
              echo strcmp( $dos,$uno).'<br/>';
              echo strcmp( $uno,$uno).'<br/>';    
              echo strcmp( $dos,$dos).'<br/>'; */

            
             /* if (strcmp( $var1[0],$var2[0]) === 0)  {        
                echo 'respuesta correcta';               
              }                                           si funciono /*************************
              else{
                echo 'respuesta incorrecta';
              }*/
             
              $suma=0;
              
              for($x=0;$x<=9;$x++){

               //echo $var1[$x].' '.$var2[$x];
               
                  if (strcmp( $var1[$x],$var2[$x]) === 0)  {                
                      $suma=$suma+1;                   
                  }          
                }


                if($suma>=6){       
                  $insertar_final = $mysqli->query("INSERT INTO calificaciones_finales VALUES ( $idUsuario, $examen,$suma,1)");
                  echo 'Felicidades tu calificacion es aprobatoria de '.$suma;
                 }
                 else{
                  $insertar_final = $mysqli->query("INSERT INTO calificaciones_finales VALUES ( $idUsuario, $examen,$suma,0)");
                  echo 'No te desanimes, sigue intentandolo'.'<br/>';
                  echo 'Tu calificacion es de '.$suma;
                 }              
              


              ?>
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