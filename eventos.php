<?php 
require 'funcs/conexion.php';
require 'funcs/funcs.php';
session_start();

    $idUsuario = $_SESSION['id_usuario'];
	$sql = "SELECT id_alumno, nombre FROM alumnos WHERE id_alumno = '$idUsuario'";
	$result = $mysqli->query($sql);
	
	$row = $result->fetch_assoc();
    $nombre_alumno=$row['nombre'];
    $id_alumno=$row['id_alumno'];

header('Content-Type: application/json');
$mysqli=new PDO("mysql:dbname=prueba;host=127.0.0.1","root","root");


$accion= (isset($_GET['accion']))?$_GET['accion']:'leer'; 

switch($accion){
    case 'agregar': 

         // Instrucción de agregado
        $sentenciaSQL = $mysqli->prepare("INSERT INTO 
		eventos(title,descripcion,color,textColor,start,end,id_profesor,id_alumno,id_evento_ult)
		VALUES(:title,:descripcion,:color,:textColor,:start,:end,:id_profesor,:id_alumno,:id_evento_ult)");
        
        $respuesta=$sentenciaSQL->execute(array(
            "title" =>$_POST['title'],
            "descripcion" => $_POST['descripcion'],
            "color" => $_POST['color'],
            "textColor" =>$_POST['textColor'],
            "start" => $_POST['start'],
            "end" => $_POST['end'],
            "id_profesor" => $_POST["id_profesor"],
            "id_alumno" => $_POST["id_alumno"],
            "id_evento_ult" => $_POST["id_evento_ult"]
            )
        );            
            echo json_encode($respuesta);
        
        break;

    case 'eliminar': 
        // Instrucción de eliminar
        // echo "Instrucción eliminar";
        $respuesta=false; 

        if(isset($_POST['id_evento'])){

            $sentenciaSQL= $mysqli->prepare("DELETE FROM eventos WHERE id_evento=:id_evento"); 
            $respuesta= $sentenciaSQL->execute(array("id_evento"=>$_POST['id_evento']));
        }
        echo json_encode($respuesta);


        break;
    case 'modificar':
        // Instrucción de modificar

        $sentenciaSQL = $mysqli->prepare("UPDATE eventos SET 
		title=:title,
		descripcion=:descripcion,
		color=:color,
		textColor=:textColor,
		start=:start,
		end=:end
		WHERE id_evento=:id_evento
        ");
        
        $respuesta=$sentenciaSQL->execute(array(
		    "id_evento" =>$_POST['id_evento'], 
            "title" =>$_POST['title'],
            "descripcion" => $_POST['descripcion'],
            "color" => $_POST['color'],
            "textColor" =>$_POST['textColor'],
            "start" => $_POST['start'],
            "end" => $_POST['end']
        ));
        echo json_encode($respuesta);


        break;
    default:
        // Seleccionar los eventos del calendario
            $sentenciaSQL= $mysqli->prepare("SELECT * FROM eventos WHERE id_alumno = $id_alumno");
            $sentenciaSQL->execute();

            $resultado= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($resultado);
        break;
        
}

?>