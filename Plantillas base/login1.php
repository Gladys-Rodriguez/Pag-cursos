<?php
  include 'inc/conexion.php';
?>


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
  </head>

  <header class="encabezado-sitio container">
    <div class="row justify-content-md-start">
      <div class=" col-sm-3 col-md-3 col-lg-3">
       <img src="img/SmartDev.png" class="img-fluid mx-auto d-block  float-left  pt-4 pb-4">
      </div>
    </div>
  </header>


  <body class="h-100 login">
    <div class="container h-100">
      <div class="row h-100 aling-items-center justify-content-md-center py-4">
        <div class="col-sm-7 col-md-6 col-lg-6">
          <div class="contenido p-5 bg-light">
            <h2 class="text-center bg-primary text-light py-2 text-uppercase">
            Usuario   
            </h2>
            
            <form class="mt-4 formulario-login needs-validation" novalidate >
              <div class="form-group">
                <label for="email">Usuario</label>
                <input type="text" class="form-control" id="email" placeholder="Email" required>
                <div class="invalid-feedback">
                  El usuario es obligatorio
                </div>
                <div class="valid-feedback">
                  Campo correcto
                </div>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control " id="password" placeholder="Password" required>
                <div class="invalid-feedback">
                  Contraseña obligatoria
                </div>
              </div>
              <input type="submit" class="mt-4 btn btn-primary " value="Iniciar Sesión">
              <a class="float-right py-5" href="recuperacion_pass.php" >he olvidado mi contraseña</a>
            </form>

          </div>
        </div>
      </div>
    </div>   
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>