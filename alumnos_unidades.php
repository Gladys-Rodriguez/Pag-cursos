<!doctype html>
<html lang="en"><!--Clase para hacer uso de elemntos de html5-->
  <head>
        <title>Admin BS</title>
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
          <h1>Unidades</h1>

            <div class="row">
              <div class="col-8">

                <table class="table table-hover"><!--Inicializacion y creacion de la tabal-->
                
                 <!-- <nav id="Unidades" class="fixed-top navbar bg-light"> Causa problemas en el header--> 
                                    
                    <caption>Let´s to talk</caption>
                      <thead class="thead-default"><!--Titulos en negritas-->
                        <tr>
                              <th>Unidad</th>
                              <th>Descripción</th>
                        </tr>
                      </thead>
                        
                      <tbody>
                        <tr>
                          <td>Unidad 1</td><!--Primer elemento de la lista-->
                          <td class="nav nav-pills" ><a class="nav-item" class="nav-link" href="#All_about_you">All about you</a></td>
                        </tr>
        
                        <tr>
                          <td>Unidad 2</td><!--Segundo elemento de la lista-->
                          <td class="nav nav-pills"><a class="nav-item" class="nav-link" href="#In_class">In Class</a></td>
                        </tr>
                              
                        <tr>
                          <td>Unidad 3</td>
                          <td class="nav nav-pills"> <a class="nav-item" class="nav-link" href="#Favorite_People">Favorite People</a></td>
                        </tr>
                        
                             <tr>
                                <td>Unidad 4</td>
                                <td> </td>
                              </tr>
                              <tr>
                                <td>Unidad 5</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Unidad 6</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Unidad 7</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Unidad 8</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Unidad 9</td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Unidad 10</td>
                                <td></td>
                              </tr>              
                        
                      </tbody>
                      </nav>
                  </table>
          </div>
      </div>
    </div>
        

    <!--Contenido del primer elemento de la lista-->
    
    <div class="col-lg-12" id="All_about_you" class="service"> 
      <h1 class="py-3">All about you</h1>
      <img src="img/personas_conociendose.jpg"width="600" height="600" class="img-fluid float-left img-thumbnail p-2">
      <h2 class="py-3"> In Unit 1, you learn how to..</h2>
      <h6> -Use the verb be whit I, you, we, and it </h6>
      <h6> -Say hello and good-bye </h6>
      <h6> -Say your name and your telephone number, and e-mail address </h6>
      <h6> -Ask how about you? </h6>
      <h6> -Use everyday espressions like Tanks </h6>
    </div>
    
    <h3 class="py-4">Lesson A</h3>
    <div class="jumbotron" class="pt-4">
      <h2 class="display-3">Hello and good-bye</h2>
    </div>
    
    <div class="row pt-4"> <!--Inicio de cards-->
      <div class="col-6 col-md-6">
        <div class="card ">
                <img src="img/personas_conociendose_1.jpg"  class="card-img-top img-fluid">
                <div class="card-body">         
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Matt: Good morning, Sarah. How are you?</li>
                        <li class="list-group-item">Sara: Good, How are you, Matt?</li>
                        <li class="list-group-item">Matt: I'm fine thanks</li>
                    </ul>                    
                </div>
        </div>
      </div>
  
      <div class="col-6 col-md-6">
        <div class="card ">
                <img src="img/despidiendose.jpg" class="card-img-top img-fluid">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Matt: Hello. I'm Matt Lenski</li>
                      <li class="list-group-item">Sara: Hi, I'm Emily Kim. Nice to meet you</li>
                      <li class="list-group-item">Matt: Nice to meet you</li>
                    </ul>  
                </div>
        </div>
      </div>
    </div><!--Fin de los cards-->
    
    <div><!--Inicio del div-->
    <h4 class="py-5" class="display-1" > 1 Getting started</h4>
    <h6 class="text-rigth text-justify"> Lisent. Matt and Sarah are friends. Are Matt and Emily friends? Practice the conversation</h6>
    <h6 class="py-4">Can you complete these conversation? Then practice with a partner. Use your own names</h6>
    
    <form action="respuestas_unidades.php" method="post">
    <p> A) Hello. I<select name="1" class="selectpicker" multiple data-max-options="1"> <!--Clase para seleccionar valores-->
    					<option value="1">'m</option>
    					<option value="0">be</option>
    					<option value="0">are</option>
    				</select>Jonathan</p>
    
    <p> B) Hi, Nice to meet you <select name="2"  class="selectpicker" multiple data-max-options="1">
    					<option value="0">I</option>
    					<option value="1">I am</option>
    					<option value="0">am</option>
    				</select>Sam</p> 

    <p>A) Nice to meet<select name ="3" class="selectpicker" multiple data-max-options="1">
    					<option value="0">us</option>
    					<option value="1">Sam</option>
    					<option value="0">you</option>
    				</select></p> 
            <!--<input type="submit" value="send">-->
    </div><!--Fin del div-->
    
   

    <div class="row pt-4"> <!--Inicio de cards-->
      <div class="col-6 col-md-6">
        <div class="card ">
                <img src="img/saludos.jpg"  class="card-img-top img-fluid">
                <div class="card-body">         
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Emily: Good night</li>
                        <li class="list-group-item">Matt: Good night. Have a good evening</li>
                        <li class="list-group-item">Emily: Thank you. You too</li>
                    </ul>                    
                </div>
        </div>
      </div>
  
      <div class="col-6 col-md-6">
        <div class="card ">
                <img src="img/saludos1.jpg" class="card-img-top img-fluid">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Matt: Bye, See you tomorrow</li>
                      <li class="list-group-item">Sara: Bye, See you</li>
                    </ul>  
                </div>
        </div>
      </div>
    </div><!--Fin de los cards-->

    <h6 class="pt-5" > Audio </h6>
    <main class="container"> <!--Clase para utilizar las 12 columnas de la pagina-->
    <div class="row pt-4" > <!--Inicio del row -->
      <div class="col-4 "> <!--primera columna-->
        <p>1.Bye. Have a good evening </p> <!--Primer ejercicio-->

        
          <div class="custom-control custom-switch"><!--Primer switch-->
            <input type="radio" class="custom-control-input" id="opcion1" name="4" value="0">
            <label class="custom-control-label" for="opcion1">You too. Good night </label>
          </div><!--Fin del Primer switch-->
          <div class="custom-control custom-switch"><!--Segundo switch-->
            <input type="radio" class="custom-control-input" id="opcion2" name="4" value="1">
            <label class="custom-control-label" for="opcion2"> You too. Good bye </label>
            
          </div> <!--Fin del Segundo switch-->
          
          <!--Fin del Primer ejercicio--> 


          <p class="pt-3">2.Hi. How are you </p><!--Segundo ejercicio-->
            <div class="custom-control custom-switch"><!--Tercer switch-->
              <input type="radio" class="custom-control-input" id="opcion3" name="5" value="1">
              <label class="custom-control-label" for="opcion3">Good thanks </label>
            </div><!--Fin del Tercer switch-->

            <div class="custom-control custom-switch">
              <input type="radio" class="custom-control-input" id="opcion4" name="5" value="0">
              <label class="custom-control-label" for="opcion4">I'm fine </label>
            </div>
            <!--Fin del Segundo ejercicio-->

      </div><!--Fin de primera columna-->
  
      <div class="col-4 "><!--segunda columna-->
            <p class="pt-1">3.Bye. See you later </p><!--Tercer ejercicio-->
            <div class="custom-control custom-switch">
              <input type="radio" class="custom-control-input" id="opcion5" name="6" value="1">
              <label class="custom-control-label" for="opcion5">Ok. See you later </label>
            </div>
            <div class="custom-control custom-switch">
              <input type="radio" class="custom-control-input" id="opcion6" name="6" value="0">
              <label class="custom-control-label" for="opcion6">Bye. See you next week </label>
            </div>
            <!--Fin del Tercer ejercicio-->

            <p class="pt-3">4.Hey, Oscar! </p><!--Cuarto ejercicio-->
            <div class="custom-control custom-switch">
              <input type="radio" class="custom-control-input" id="opcion7" name="7" value="1">
              <label class="custom-control-label" for="opcion7">Hi, How are you? </label>
            </div>
            <div class="custom-control custom-switch">
              <input type="radio" class="custom-control-input" id="opcion8" name="7" value="0">
              <label class="custom-control-label" for="opcion8">Hello </label>
            </div>
            <!--Fin delCuarto ejercicio-->
        </div><!--Fin de la segunda columna-->

        <div class="col-4 "><!--Tercera columna-->
            <p class="pt-1">5.Good-bye. Have a nice day </p><!--Quinto ejercicio-->
            <div class="custom-control custom-switch">
              <input type="radio" class="custom-control-input" id="opcion9" name="8" value="0">
              <label class="custom-control-label" for="opcion9">Thank you </label>
            </div>
            <div class="custom-control custom-switch">
              <input type="radio" class="custom-control-input" id="opcion10" name="8" value="1">
              <label class="custom-control-label" for="opcion10">Thanks. You too </label>
            </div>
            <!--Fin del Quinto ejercicio-->
        </div><!--Fin de la Tercera columna--> 
        
       

        <div class="col-12 "><!--Inicio de columna-->
          <h6 class="pt-5">Write three expresions for sey hello and good-bye. Compare whith a partner</h6> 
        </div><!--Fin de la columna-->

        <div class="col-4 "><!--Inicio de columna-->
            <h5>Hello</h5>
            <input type="text" class="form-control" id="9" name="9" >
            <input type="text" class="form-control" id="10" name="10">
            <input type="text" class="form-control" id="11" name="11">
        </div><!--Fin de la columna-->

        <div class="col-4 "><!--Inicio de columna-->
            <h5>Good-Bye</h5>
            <input type="text" class="form-control" id="12" name="12">
            <input type="text" class="form-control" id="13" name="13">
            <input type="text" class="form-control" id="14" name="14">
        </div><!--Fin de la columna-->

        <input type="submit" value="send">
        </form><!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
    </div><!--Fin del row-->
    </main><!--Fin del main para utilizar las 12 columnas-->

    
    <!--Inicio de la leccion B-->

    <h3 class="py-4">Lesson B</h3>
    <div class="jumbotron" class="pt-4">
      <h2 class="display-3">Names</h2>
    </div>
    <div class="row pt-4"> <!--Inicio de cards-->
      <div class="col-4 "><!--Primera columna para el primer card-->
        <div class="card ">
                <img src="img/hombre_sonriendo.jpg"  class="card-img-top img-fluid">
                <div class="card-body">         
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Hi. My name is David</li>
                        <li class="list-group-item">My last name is Hanson</li>
                      
                    </ul>                    
                </div>
        </div>
      </div>
  
      <div class="col-4 "><!--Segunda columna para el segundo card-->
        <div class="card ">
                <img src="img/mujer_sonriendo.jpg" class="card-img-top img-fluid">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Hi, I'm Liz Park</li>
                      <li class="list-group-item">My first name is Elizabeth</li>
                      <li class="list-group-item">Liz is short for Elizabeth</li>
                    </ul>  
                </div>
        </div>
      </div>

      <div class="col-4 "><!--Tercera columna para el tercer card-->
        <div class="card ">
                <img src="img/mujer_sonriendo2.jpg" class="card-img-top img-fluid">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">I'm Mary Gomez</li>
                      <li class="list-group-item">My middle name is Ann</li>
                      <li class="list-group-item">Frank is my husband</li>
                    </ul>  
                </div>
        </div>
      </div> 
    </div><!--Fin de los cards-->

    <div class="col-4 "><!--Inicio de columna-->
            <h6 class="pt-4">Complete the sentences. Then compare with a partner </h6>
            <p>My first name is</p>
            <input type="text" class="form-control" id="names_1" >
            <p>My last name is</p>
            <input type="text" class="form-control" id="names_2" >
            <p>My middle name is</p>
            <input type="text" class="form-control" id="names_3" >
            <p>My nickname name is</p>
            <input type="text" class="form-control" id="names_4" >
            <p>My teacher's name is</p>
            <input type="text" class="form-control" id="names_5" >
            <p>My favorite name is</p>
            <input type="text" class="form-control" id="names_6" >
    </div><!--Fin de la columna-->

    <div class="col-12 "><!--Inicio de columna-->        
      <h6 class="pt-5">Lisen and say the alphabet. Practice with a partner</h6>
      <p>Audio</p>
      <img class="pt-5" src="img/abecedario.jpg" class="card-img-top img-fluid">
    </div><!--Fin de la columna-->

    <div class="col-6 "><!--Inicio de columna-->        
      <h6 class="pt-5">Lisen. Then practice the conversation with a partner use our own names</h6>
      <p>Audio</p>
      <p class="pt-4">A. What's your name ?</p>
      <p>B. Catherine Ravelli</p>
      <p>A. How do you spell Catherine?</p>
      <p>B. C-A-T-H-E-R-I-N-E</p>
      <p>A. Thanks. And you last name?</p>
      <p>B. R-A-V-E-L-L-I</p>

      <h6 class="pt-3">Ask your classmates their names. Make a list</h6>
    </div><!--Fin de la columna-->

    <main class="container"> <!--Clase para utilizar las 12 columnas de la pagina-->

    <form action="respuestas_unidades.php" method="post">

      <div class="row pt-4" > <!--Inicio del row -->
        <div class="col-6 "> <!--primera columna-->
        <h6 class="py-4">Listen. Which classroom is Carmen in this term. What about Jenny? Practice the conversation </h6>
        <p>Mr.Martin. Good morning. Are you here for an English class? </p>
        <p>Carmen. Yes. I am. I'm Carmen Rivera</p>
        <p>Mr.Martin. Ok. You're in room B</p>
        <p>Jenny. And I'm Jenny</p>
        <p>Mr.Martin. Are you jenny Loo</p>
        <p>Jennny. No, I'm not. I'm Jenny Lim. Am I in Room B, too?</p>
        <p>Mr.Martin. Yes... Wait-no, you're not. Your in Room G</p>
        <p>Jenny. Oh no! Carmen, we're not in the same class</p>
        </div><!--fin de la primera columna-->

        <div class="col-6 "> <!--segunda columna-->
          <img src="img/amigas.jpg" class="card-img-top img-fluid">
        </div><!--fin de la segunda columna-->

        <div class="col-6 "> <!--segunda columna-->
            <div class="jumbotron" class="pt-4">
              <h5>In Conversation </h5>
              <h6> I is the most common word</h6>
              <h6> I'm is more common than I am</h6>
            </div>
        </div><!--fin de la segunda columna-->

        <div class="col-7 "> <!--Inicio columna-->
          <h5>Grammar The verb be: I, you, and, we </h5>
          <p> I'm Jenny</p> 
          <p> I'm not Carmen</p> 
          <p> You´re in Room G</p> 
          <p> You're not in Room B</p> 
          <p> We're in different classes</p> 
          <p> We're not in te same class</p> 
        </div><!--fin de la columna-->
        
        <div class="col-5 "> <!--Inicio columna-->
          <p class="pt-5"> Are you Janny? </p> 
          <p> Yes, I am/ No, I'm not</p> 
          <p> Am I in Room B?</p> 
          <p> Yes, you are/ No, you're not</p> 
          <p> Are we in the same class?</p> 
          <p > Yes we are/ No, we're not</p> 
        </div><!--fin de la columna-->

        <div class="col-12 "> <!--Inicio columna-->
          <div class="jumbotron" class="pt-4">
              <h6> I'm= I am You're= You are   We're= We are</h6>
          </div>
        </div><!--fin de la columna-->


        
        <div class="col-6 "> <!--Inicio columna-->
       

          <h6 class="py-4"> Complete the convesation. Then practice with a partner </h6>
            <p >A)<select class="selectpicker" multiple data-max-options="1" name="15"> <!--Clase para seleccionar valores-->
                  <option value="0">Is</option>
                  <option value="1">Are</option>
                  <option value="0">I</option>
                </select>you Emiko?</p>
        
            <p > B) Yes, I<select class="selectpicker" multiple data-max-options="1" name="16">
                        <option value="0">do</option>
                        <option value="0">'m</option>
                        <option value="1">am</option>
                        </select>
                . I <select class="selectpicker" multiple data-max-options="1" name="17">
                        <option value="0">am</option>
                        <option value="1">'m</option>
                        <option value="0">do</option>
                        </select> </p>
                <p> here for an English class. <select class="selectpicker" multiple data-max-options="1"name="18">
                        <option value="1">Are</option>
                        <option value="0">Do</option>
                        <option value="0">Is</option>
                        </select> you here for English, too?</p> 

            <p>A) No, I <select class="selectpicker" multiple data-max-options="1" name="19">
                  <option value="0">am</option>
                  <option value="1">'m</option>
                  <option value="0">don't</option>
                </select> </p> 

               <p> <select class="selectpicker" multiple data-max-options="1"name="20">
                  <option value="0">don't</option>
                  <option value="0">are not</option>
                  <option value="1">not </option>
                </select> </p>
            <p>I <select class="selectpicker" multiple data-max-options="1" name="21">
                  <option value="0">am</option>
                  <option value="1">'m</option>
                  <option value="0">don't</option>
                </select> here for a French class</p> 
        </div><!--fin de la columna-->

        <div class="col-6 "> <!--Inicio columna-->
            <p class="pt-5">A)<select class="selectpicker" multiple data-max-options="1" name="22"> <!--Clase para seleccionar valores-->
                  <option value="0">Is</option>
                  <option value="1">Are</option>
                  <option value="0">I</option>
                </select>you Chris?</p>
        
            <p > B) Yes, I<select class="selectpicker" multiple data-max-options="1"name="23">
                        <option value="0">do</option>
                        <option value="0">'m</option>
                        <option value="1">am</option>
                        </select>
                        
                        <select class="selectpicker" multiple data-max-options="1" name="24">
                        <option value="1">are</option>
                        <option value="0">am</option>
                        <option value="0">do</option>
                        </select>we in the same class?</p>
                <p> A) Yes we <select class="selectpicker" multiple data-max-options="1"name="25">
                        <option value="1">Are</option>
                        <option value="0">Do</option>
                        <option value="0">Is</option>
                        </select> 
                    
                    I <select class="selectpicker" multiple data-max-options="1" name="26">
                        <option value="0">am</option>
                        <option value="0">do</option>
                        <option value="1">'m</option>
                        </select> Dino </p> 

            <p>B) Hi, Dino. Nice to meet you </p> 
              <br/>
              <input type="submit" value="send">
    </form> <!--Fin de la leccion Baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
     
        </div><!--fin de la columna-->

       </div><!--Fin del row-->

     <div class="col-12 "> <!--Inicio columna-->
              <h5> Pair Work </h5>
              <h6> Choose a conversation and practice. Use your own information. Then practice act out your conversation for the class </h6>
        </div><!--fin de la columna-->
      </main><!--Fin del main para utilizar las 12 columnas-->

    <!--Fin de la leccion B-->
    
    <!--Inicio de la leccion C--> 

    <main class="container"> <!--Clase para utilizar las 12 columnas de la pagina-->
      <div class="row pt-4" > <!--Inicio del row -->

        <div class="col-12 "> <!--Inicio de la columna-->
          <h3 class="py-4">Lesson C</h3>
          <div class="jumbotron" class="pt-4">
          <h2 class="display-3">Personal Information</h2>
          </div>
        </div><!--Fin de la columna-->

      <div class="col-12 "><!--Inicio de columna-->        
        <h4 class="pt-5">Numbers 0-10</h4>
        <p>Audio</p>
        <img class="pt-5" src="img/numeros.jpg" class="card-img-top img-fluid">
        <h6 class="pt-4">Lisent. Then practice</h6>
        <p> Audio </p>
      </div><!--Fin de la columna-->

      <div class="row pt-4"> <!--Inicio de cards-->
        <div class="col-4 "><!--Primera columna para el primer card-->
          <div class="card ">
            <img src="img/hombre_sonriendo.jpg"  class="card-img-top img-fluid">
              <div class="card-body">         
                <ul class="list-group list-group-flush">
                   <li class="list-group-item">Hi. My name is David</li>
                    <li class="list-group-item">My last name is Hanson</li>              
                </ul>                    
              </div>
          </div>
        </div>
          
        <div class="col-4 "><!--Segunda columna para el segundo card-->
          <div class="card ">
            <img src="img/mujer_sonriendo.jpg" class="card-img-top img-fluid">
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Hi, I'm Liz Park</li>
                  <li class="list-group-item">My first name is Elizabeth</li>
                  <li class="list-group-item">Liz is short for Elizabeth</li>
                </ul>  
              </div>
          </div>
        </div>

        <div class="col-4 "><!--Segunda columna para el segundo card-->
          <div class="card ">
            <img src="img/mujer_sonriendo.jpg" class="card-img-top img-fluid">
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Hi, I'm Liz Park</li>
                  <li class="list-group-item">My first name is Elizabeth</li>
                  <li class="list-group-item">Liz is short for Elizabeth</li>
                </ul>  
              </div>
          </div>
        </div>
      </div><!--Fin de los cards-->

      </div><!--Fin del row-->
    </main><!--Fin del main para utilizar las 12 columnas-->

     <!--Fin de la leccion C-->


    <!--Fin del contenido del primer elemento de la lista-->

    <div  class="col-lg-12" id="In_class" class="service"><!-- Inicio del contenido del segundo elemento de la lista-->
      <h1 class="py-3">In Class</h1>
      <img src="img/salon.jpg "width="600" height="600" class="img-fluid float-left img-thumbnail p-2">
      <h2 class="py-3"> In Unit 2, you learn how to..</h2>
      <h6> -Use the verb be with he, she, they, this and these </h6>
      <h6> -Talk about things and places in a classroom </h6>
      <h6> -Ask for help in class </h6>
      <h6> -Respond to thank you and I'm sorry  </h6>
    </div>

    <!--Fin del contenido del segundo elemento de la lista-->


     <div class="col-lg-12" id="Favorite_People" class="service"><!-- Inicio del contenido del segundo elemento de la lista-->
      <h1 class="py-3">Favorite People</h1>
      <img src="img/picnic.jpg "width="600" height="600" class="img-fluid float-left img-thumbnail p-2">
      <h2 class="py-3"> In Unit 3, you learn how to..</h2>
      <h6> -Use my, your, his, our, and their </h6>
      <h6> -Use the verb be in information questions </h6>
      <h6> -Talk about your favorite celebrities, friends, and family </h6>
      <h6> -Show interest in a conversation </h6>
      <h6> -Use Really? to show interest or surprise </h6>
    </div>

    <!--Fin del contenido del tercer elemento de la lista-->

    <div class="jumbotron">
      <h2 class=lecture-title class="display-3 "> </h2>
    </div>
      
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