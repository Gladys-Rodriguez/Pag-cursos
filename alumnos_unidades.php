<!doctype html>
<html lang="en"><!--Clase para hacer uso de elemntos de html5-->
  <head>
        <title>Lecciones</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lecciones</title>
        

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
                                    
                    <caption>Programando en C</caption>
                      <thead class="thead-default"><!--Titulos en negritas-->
                        <tr>
                              <th>Unidad</th>
                              <th>Descripción</th>
                        </tr>
                      </thead>
                        
                      <tbody>
                        <tr>
                          <td>Lección 1</td><!--Primer elemento de la lista-->
                          <td class="nav nav-pills" ><a class="nav-item" class="nav-link" href="#Tipos de Datos">Tipos de Datos</a></td> 
                        </tr>
        
                        <tr>
                          <td>Lección 2</td><!--Segundo elemento de la lista-->
                          <td class="nav nav-pills"><a class="nav-item" class="nav-link" href="#"></a></td>
                        </tr>
                              
                        <tr>
                          <td>Lección 3</td>
                          <td class="nav nav-pills"> <a class="nav-item" class="nav-link" href="#"></a></td>
                        </tr>
                        
                                     
                        
                      </tbody>
                      </nav>
                  </table>
          </div>
      </div>
    </div>
        

    <!--Fin del contenido del tercer elemento de la lista-->
    <div class="col-lg-12" id="Tipos de Datos" class="service"> 
      <h1 class="py-3">Lección 1</h1>
      <img src="img/C/datos.png"width="600" class="img-fluid float-left img-thumbnail p-2">
      <h2 class="py-3"> Tipos de Datos </h2>
      <!--<h6> -Use the verb be whit I, you, we, and it </h6>
      <h6> -Say hello and good-bye </h6>
      <h6> -Say your name and your telephone number, and e-mail address </h6>
      <h6> -Ask how about you? </h6>
      <h6> -Use everyday espressions like Tanks </h6> -->
      <p align="justify">Todas las variables y constantes de un programa deben ser de un tipo de dato específico, el cual indica en forma implícita el tipo de valores que se pueden almacenar, el espacio en memoria que ocuparán y su forma de almacenamiento, así como las operaciones que se pueden hacer con este. </p>
      <h6>Los tipos de datos más usuales son:</h6>
      <p align="left">Entero, decimal y carácter, que se identifican por int, float y char respectivamente.</p>
      <p align="justify">En el lenguaje C no existen datos lógicos directos, aunque pueden simularse a través del tipo entero o carácter.</p>
    </div>

    <h3 class="py-4">Tipos de Datos 1.1</h3>
    <div class="jumbotron" class="pt-4">
      <h2 class="display-3">Constantes y variables</h2>
    </div>
    <div class="row pt-4"> <!--Inicio de cards-->
      <div class="col-4 "><!--Primera columna para el primer card-->
        <div class="card ">
                <img src="img/C/datos1.jpg"  class="card-img-top img-fluid">
                <div class="card-body">         
                    <p align="justify">Cada constante y cada variable tienen un espacio físico asignado dentro de la memoria temporal con un determinado número de bytes, el cual queda distribuido en ciertos términos prefijados. </p>                    
                    <p align="justify">No obstante, quien codifique debe tener en cuenta los límites de las variables manejadas a fin de utilizar el formato adecuado. </p>
                  </div>
        </div>
      </div>
  
      <div class="col-4 "><!--Segunda columna para el segundo card-->
        <div class="card ">
                <img src="img/C/datos2.jpg" class="card-img-top img-fluid">
                <div class="card-body">
                    <p align="justify">En la mayoría de los compiladores el tipo entero queda almacenado en 2 bytes o, lo que es lo mismo, 16 bits. </p>
                    <p align="justify">Con 16 bits se pueden formar 216 combinaciones = 65 536 combinaciones.</p>
                    <p align="justify">Si esas combinaciones se dividen entre 2 quedan 32 768 negativos, el cero y 32 767 números positivos. </p>
                  </div>
        </div>
      </div>

      <div class="col-4 "><!--Tercera columna para el tercer card-->
        <div class="card ">
                <img src="img/C/datos3.png" class="card-img-top img-fluid">
                <div class="card-body">
                <p align="justify">No puede haber número entero que salga de esos límites si fue declarado de tipo int. 10 aunque el lenguaje C conserva la posibilidad de utilizar modificadores para ampliar o reducir el número de bytes asignados.</p>    
                </div>
        </div>
      </div> 
    </div><!--Fin de los cards-->

    <div class="jumbotron" class="pt-4">
      <h2 class="display-3">Modificadores</h2>
    </div>
    
    <div class="row pt-4" > <!--Inicio del row -->
        <div class="col-6 "> <!--primera columna-->
        <p align="justify">Hay modificadores que se aplican a todos los tipos básicos. Pueden combinarse los modificadores referentes al espacio con los referentes al signo. </p>        
        <p align="justify">Los modificadores signed y unsigned no cambian el espacio asignado. Los tipos de datos son signed por omisión. Los modificadores se pueden anteponer al tipo de dato.</p>
        <p align="justify">Si se utilizan para enteros, puede omitirse la palabra int. El tamaño en bytes para short, normal y long varía de compilador a compilador.
        </p>  
      </div><!--fin de la primera columna-->

        <div class="col-6 "> <!--segunda columna-->
          <img src="img/C/modificadores.png" class="card-img-top img-fluid">
        </div><!--fin de la segunda columna-->
    </div>
<br>
    <div class="jumbotron" class="pt-4">
      <h2 class="display-3">Uso de constantes</h2>
    </div>
    <div class="row pt-4" > <!--Inicio del row -->
    <div class="col-6 "> <!--segunda columna-->
          <img src="img/C/constante.png" class="card-img-top img-fluid">
        </div><!--fin de la segunda columna-->

        <div class="col-6 "> <!--primera columna-->
        <p align="justify">Las constantes son espacios de memoria con un nombre específico cuyo valor no cambia a lo largo de todo el programa; se definen con la directiva #define. </p>        
        <p align="justify">Al utilizar la constante se facilita el mantenimiento y la claridad del código. 
          Sirva este como ejemplo:</p>
      </div><!--fin de la primera columna-->
    </div>

    <div class="jumbotron" class="pt-4">
      <h2 class="display-3">Reglas para identificadores</h2>
    </div>
    <div class="row pt-4"> <!--Inicio de cards--> 
      <div class="col-6 col-md-6">
        <div class="card ">
                <img src="img/C/identificadores.png"  class="card-img-top img-fluid">
                <div class="card-body">         
                    <p align="justify">Toda subrutina, variable y constante debe llevar un nombre irrepetible a lo largo del programa. </p>                 
                    <p align="justify">Dicho nombre —conocido como identificador— debe declararse antes de poder emplearse y es la forma en que el compilador ubica el elemento del cual se trata</p>
                  </div>
        </div>
      </div>
  
      <div class="col-6 col-md-6">
        <div class="card ">
                
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Deben comenzar con una letra. </li>
                      <li class="list-group-item">No deben tener espacios, guiones ni caracteres especiales (ñ, acentos, etc.)</li>
                      <li class="list-group-item">Se admite el carácter de subrayado, aunque ya no es algo usual. </li>
                      <li class="list-group-item">Algunos lenguajes (C y Java, entre otros) hacen distinción de mayúsculas y minúsculas, mientras que otros (Basic y SQL, entre otros) no la toman en cuenta.</li>
                      <li class="list-group-item">Deben ayudar a identificar el propósito de la variable o subrutina.</li>
                      <li class="list-group-item">En lenguaje C permanece la costumbre de manejar todo en minúsculas, con excepción de las constantes, que se escriben con mayúsculas. No obstante, en Java y tecnología .NET se acostumbra la “notación de camello”: la primera letra de cada palabra comienza con mayúscula (excepto la primera).</li>
                    </ul>  
                </div>
        </div>
      </div>
    </div> <!--Fin de los cards-->
      
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
<br>
  <div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
          
          <?php
            require_once('footer.php');
          ?>
          <!-- end footer -->
        
  </div>

</html>