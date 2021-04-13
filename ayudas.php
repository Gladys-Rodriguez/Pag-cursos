<?php
session_start();
require 'funcs/conexion.php';
include 'funcs/funcs.php';
	$sentencia=$mysqli->prepare("SELECT * FROM 'profesores'");
	$sentencia->execute();
	$mostrarProfes=$sentencia->fetchAll(PDO::FETCH_ASSOC);
	print_r($mostrarProfes);
?>

<!-- ESTO MUESTRA UNA TABLA QUE OBTINE LOS DATOS DE UNA CONSULTA -->

                <table>

                <?php
					$sql="SELECT * FROM profesores";
					$resultado=mysqli_query($mysqli,$sql);

					while($mostrar=mysqli_fetch_array($resultado));
					{
				?>
					<tr>
							<td><?php echo $mostrar['id_profesor']?></td>
							<td><?php echo $mostrar['nombre']?></td>
					</tr>
				<?php
					}
				?>
			    </table>



<!-- Este es para mostar u ocultar una seccion -->
<button type="button" id="show">Mostrar botón acción</button>
    

	<div  id="button" style="display:none">
	<p>este es el que se oculta</p>
	<button type="button" id="hide" >Ocultar botón acción</button>

	<script>
      $(function(){
        $('#show').click(function(){
          $('#button').show();
        });
        $('#hide').click(function(){
          $('#button').hide();
        });
      })
    </script>				