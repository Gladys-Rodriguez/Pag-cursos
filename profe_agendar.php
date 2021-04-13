<?php
	session_start();

 

    $mysqli=new PDO("mysql:dbname=prueba;host=127.0.0.1","root","root");
    $sentenciaSQL = $mysqli->prepare("SELECT MAX(id_evento)+1 AS id FROM eventos");
    $sentenciaSQL->execute();
    $row = $sentenciaSQL->fetch();
    $id_evento_ult =$row['id'];
    /* Se obtinene las variables de la URL */
	$id_profesor = $_GET['id_profesor'];
    $id_alumno = $_GET['id_alumno'];
    $nombre_profe = $_GET['nombre_profe'];
    $apellido_p_profe = $_GET['apellido_p_profe'];
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
			Selección Profesores
    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>
    <!--  Full Calendar -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>
    <script src="js/bootstrap-clockpicker.js"></script>
    <link rel="stylesheet" href="css/bootstrap-clockpicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
    
      .fc th{
          padding: 10px 0px;
          vertical-align: middle;
          background: #F2F2F2;


      }
    </style>

</head>
<body>
<!-- <div>
    <h2>
        <?php 
            /* echo $id_evento_ult." <br>";
            echo $id_profesor." <br>";
            echo $nombre_profe." <br>";
            echo $apellido_p_profe." <br>"; */
        ?>
    </h2>
</div>

<div>
    <h2>
        <?php 
        
            /* echo $id_alumno;  */
        ?>
    </h2>
</div> -->

<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px; width:100%;">
					<?php
						require_once('header_Alumnos.php');
					?>
			</div>
    <div class="container">
        <div class="row">


            <div class="col-sm-12 col-md-5 col-lg-5">

                <div>
                    <h2 style="text-align:center;"><br>Estas agendando una <br>  asesoria con<br><br>   <b> <?php echo $nombre_profe." ".$apellido_p_profe?></b></h2>
                </div>

                

                <div>
                <img src="img/usuario.jpg" style="padding: 5px 10px; border-radius: 5px; height:210px; width:200px;display:block; margin:auto;">
                </div>
                <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <label for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label for="radio5">★</label>
                </p>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-7"> <br/><br/> <div id="CalendarioWeb"></div></div>
            <div class="col"></div>
        </div>
    </div>
<!-- Se utiliza la libreria de fullcalendar -->   
<script>
    $(document).ready(function(){
        $('#CalendarioWeb').fullCalendar({
            header:{
                left:'today,prev,next', 
                center:'title',
                right:'month,basicWeek,basicDay'
            }, dayClick:function(date,jsEvent,view){

                $('#btnAgregar').prop("disabled",false);
                $('#btnModificar').prop("disabled",true);
                $('#btnEliminar').prop("disabled",true);


                limpiarFormulario();
                $('#txtFecha').val(date.format());
                $("#ModalEventos").modal();

            }, 
             events:'eventos.php',
            
           eventClick:function(calEvent,jsEvent,view){


                $('#btnAgregar').prop("disabled",true);
                $('#btnModificar').prop("disabled",false);
                $('#btnEliminar').prop("disabled",false);

               
                // H2
                $('#tituloEvento').html(calEvent.title);
                
               // Mostrar la información del evento en los inputs
                $('#txtDescripcion').val(calEvent.descripcion);
                $('#txtid_evento').val(calEvent.id_evento);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                
                FechaHora= calEvent.start._i.split(" ");
                $('#txtFecha').val(FechaHora[0]);
                
               
                $("#ModalEventos").modal();

           }, 
           editable:true, 
           eventDrop:function(calEvent){
                $('#txtid_evento').val(calEvent.id_evento);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);

                var fechaHora=calEvent.start.format().split("T");
                $('#txtFecha').val(fechaHora[0]);
				$('#txtHora').val(fechaHora[1]);

                RecolectarDatosGUI();
                EnviarInformacion('modificar',NuevoEvento,true);

           }
           
            
            
			

        });

    });

</script>



<!-- Modal (es un pop-up )(Agregar, m¡Modificar, Eliminar) -->
<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloEvento"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

         
         <input type="hidden" id="txtid_evento" name="txtid_evento">
           <input type="hidden" id="txtFecha" name="txtFecha" />

          <div class="form-row">
                <div class="form-group col-md-8">
                    <label>Profesor:</label>
                    <input type="text" id="txtTitulo" class="form-control" placeholder='<?php echo $nombre_profe."<br>".$apellido_p_profe?>'>
                </div>
                <div class="form-group col-md-4">
                        <label >Hora del evento:</label>
                       
                        <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" id="txtHora" value="10:30" class="form-control" />
                        </div>                        
                </div>

            </div>
            <div class="form-group" style="display:none" >
                    <label >Descripción:</label>
                    <textarea  id="txtDescripcion" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group" style="display:none" >   
                        <label >Color:</label>
                        <input type="color" value="#ff0000"id="txtColor" class="form-control" style="height:36px;">
                </div>

                <input type="hidden" id="id_profesor" value="<?php echo $id_profesor?>"  >
                <input type="hidden" id="id_alumno" value="<?php echo $id_alumno?>"  >
                <input type="hidden" id="id_evento_ult" value="<?php echo $id_evento_ult?>"  >
                

        </div>
        <div class="modal-footer">

            <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
            <button type="button" id="btnModificar" class="btn btn-success" >Modificar</button>
            <button type="button" id="btnEliminar" class="btn btn-danger" >Borrar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            

        </div>
      </div>
    </div>
  </div>
<script>
var NuevoEvento; 
    
 $('#btnAgregar').click(function(){
   
     RecolectarDatosGUI();
     EnviarInformacion('agregar',NuevoEvento);
});
$('#btnEliminar').click(function(){
     RecolectarDatosGUI();
     EnviarInformacion('eliminar',NuevoEvento);
});
$('#btnModificar').click(function(){
     RecolectarDatosGUI();
     EnviarInformacion('modificar',NuevoEvento);
});


    
function RecolectarDatosGUI(){
    NuevoEvento= {
         id_evento:$('#txtid_evento').val(),
         title:$('#txtTitulo').val(), 
         start:$('#txtFecha').val()+" "+$('#txtHora').val(), 
         color:$('#txtColor').val(),
         descripcion:$('#txtDescripcion').val(),
         textColor:"#FFFFFF", 
         end:$('#txtFecha').val()+" "+$('#txtHora').val(),
         id_profesor:$('#id_profesor').val(),
         id_alumno:$('#id_alumno').val(),
         id_evento_ult:$('#id_evento_ult').val()
        }; 
}

function EnviarInformacion(accion,objEvento,modal){ 
        $.ajax({
            type:'POST', 
            url:'eventos.php?accion='+accion, 
            data:objEvento, 
            success:function(msg){
             if(msg){
                $('#CalendarioWeb').fullCalendar('refetchEvents');  
                if(!modal){
                    $("#ModalEventos").modal('toggle');
                }
                

             }
            }, 
            error:function(){
                alert("Hay un error ..");
            }

        });



}

$('.clockpicker').clockpicker();
function limpiarFormulario(){
                $('#txtID').val('');
                $('#txtTitulo').val('<?php echo $nombre_profe." ".$apellido_p_profe?>');
                $('#txtColor').val('');
                $('#txtDescripcion').val('');

}

</script>

<!-- start footer -->
<div class="container-fluid" style="border: 0px; margin: 0px; padding:0px">
				<br>
				<?php
					require_once('footer.php');
				?>
			<!-- end footer -->
			</div> 
           
</body>
</html>