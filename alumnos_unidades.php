<!doctype html>
<html lang="en"><!--Clase para hacer uso de elemntos de html5-->
  <head>
        <title>Lecciones</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alumnos_Unidades</title>
        

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
						require_once('header_alumnos.php');//
					?>
					
		
  </head>

    	<!-- <div class="jumbotron">
    
      <h2 class="display-3 ">Alumnos</h2>
    </div> -->

  <main class="container">
    <body data-spye="scroll" data-target="#Unidades"><!--Clase para poder dar scroll spye-->
    
      <div class="row">
        <div class="col-12">
          <h1>Lecciones</h1>

            <div class="row">
              <div class="col-8">

                <table class="table table-hover"><!--Inicializacion y creacion de la tabal-->
                
                 <!-- <nav id="Unidades" class="fixed-top navbar bg-light"> Causa problemas en el header--> 
                                    
                    <caption>.........</caption>
                      <thead class="thead-default"><!--Titulos en negritas-->
                        <tr>
                              <th>Unidad</th>
                              <th>Descripción</th>
                        </tr>
                      </thead>
                        
                      <tbody>
                        <tr>
                          <td>Lección 1</td><!--Primer elemento de la lista-->
                          <td class="nav nav-pills" ><a class="nav-item" class="nav-link" href="#All_about_you">...</a></td> 
                        </tr>
        
                        <tr>
                          <td>Lección 2</td><!--Segundo elemento de la lista-->
                          <td class="nav nav-pills"><a class="nav-item" class="nav-link" href="#In_class">...</a></td>
                        </tr>
                              
                        <tr>
                          <td>Lección 3</td>
                          <td class="nav nav-pills"> <a class="nav-item" class="nav-link" href="#Favorite_People">...</a></td>
                        </tr>
                        
                             <tr>
                                <td>Lección 4</td>
                                <td> </td>
                              </tr>
                              <tr>
                                <td>Lección 5</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Lección 6</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Lección 7</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Lección 8</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Lección 9</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Lección 10</td>
                                <td></td>
                              </tr>              
                        
                      </tbody>
                      </nav>
                  </table>
          </div>
      </div>
    </div>
        

    <!--Fin del contenido del tercer elemento de la lista-->

   
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    
  <!-- start footer -->		
  </body>
  </main>

  <div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
          
          <?php
            require_once('footer.php');
          ?>
          <!-- end footer -->
        
  </div>

</html>