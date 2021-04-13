

<!doctype html>
<html lang="en">
  <head>
        <title>Admin BS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <link rel="stylesheet" href="css/styles.css">

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
                <div id="slider" class="carousel slide py-5" data-ride="carousel" > <!--Inicio del carousel-->
                  
                      <ol class="carousel-indicators">
                          <li data-target="#slider" data-slide-to="0" class="active"></li>
                          <li data-target="#slider" data-slide-to="1"></li>
                          <li data-target="#slider" data-slide-to="2"></li>
                      </ol>
                      
                    
                      <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid float-center" src="img/frase_motivadora_4.jpg" 
                                width="350" height="1000">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid float-center" src="img/frase_motivadora.jpeg"
                                 width="1000" height="15">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid float-center " src="img/frase_motivadora_1.jpg" 
                                width="350" height="350">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Puente de la torre</h3>
                                </div>
                            </div>
                      |</div> 
                      
                      <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                </div><!--Fin del carousel-->

                <div class="row pt-4"><!--Inicio de los cards-->
                <div class="col-6 col-md-3">
                  <div class="card ">
                    <h2 class="card-title text-center py-2">Unidades</h2>
                          <img src="img/libros.png" class="card-img-top img-fluid ">
                          <div class="card-body">
                              <p class="card-text text-center">En esta sección podras visualizar los temas explicados de cada unidad, ejecicios, vocabulario, imagenes, etc</p>
                              
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Unidades 1-10</li>
                                  <li class="list-group-item">leccion A, B, C y D por unidad</li>
                              </ul>
                              <a href="Alumnos_Unidades.php" class="btn btn-primary mt-2 float-right">Ir</a><!--Enlace a la siguiente seccion-->
                              
                          </div>
                  </div>
                </div>
            
                <div class="col-6 col-md-3">
                  <div class="card ">
                    <h2 class="card-title text-center py-2">Ejercicios</h2>
                          <img src="img/tarea_2.jpg" width="100" height="160" class="card-img-top img-fluid">
                          <div class="card-body">
                              <p class="card-text text-center">En esta sección podras reforzar los temas aprendidos con una serie de ejercicios</p>
                              
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Ejercicios de las unidades 1-10</li>
                                  <li class="list-group-item py-4">Ejercicios A, B, C y D por unidad</li>
                                  <li class="list-group-item py-1"></li>
                              </ul>
                              <a href="Alumnos_Ejercicios.php" class="btn btn-primary mt-3 float-right">Ir</a>
                              
                          </div>
                  </div>
                </div>

                <div class="col-6 col-md-3">
                  <div class="card ">
                    <h2 class="card-title text-center py-2">Test</h2>
                          <img src="img/examen.jpg" class="card-img-top img-fluid">
                          <div class="card-body">
                              <p class="card-text text-center">Realizacion de examenes cronometrados una vez por terminada la unidad</p>
                              
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Examenes de las unidades 1-10</li>
                                  <li class="list-group-item py-4"></li>
                                  <li class="list-group-item py-4"></li>
                              </ul>
                              <a href="inicio_examen.php" class="btn btn-primary mt-1 float-right">Ir</a>
                              
                          </div>
                  </div>
                </div>

                <div class="col-6 col-md-3">
                  <div class="card ">
                    <h2 class="card-title text-center py-2">Contacto</h2>
                          <img src="img/mensajes.jpg" class="card-img-top img-fluid">
                          <div class="card-body">
                              <p class="card-text text-center">En esta sección podras cominicarte con tu profesor en caso que tengas una asesoria pendiente</p>
                              
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item py-2"></li>
                                  <li class="list-group-item py-5"></li>
                              </ul>
                              <a href="#" class="btn btn-primary mt-2 float-right">Ir</a>
                              
                          </div>
                  </div>
                </div>

                <div class="col-6 col-md-3 col-lg-3">
                  <div class="card">
                    <h2 class="card-title text-center py-2">Asesorias</h2>
                          <img src="img/profesor_2.jpg" class="card-img-top img-fluid">
                          <div class="card-body">
                              <p class="card-text text-center">Podras relizar una cita para una asesoria de algun tema en especifico el cual no hayas comprendido en su totalidad</p>
                              
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item ">Horarios disponibles</li>
                                  <li class="list-group-item ">7:00 am - 2:00 pm</li>
                              </ul>
                              <a href="#" class="btn btn-primary mt-2 float-right">Ir</a>
                              
                          </div>
                  </div>
                </div>
                </div><!--row--><!--Fin de los cards-->
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
  </body>
</html>