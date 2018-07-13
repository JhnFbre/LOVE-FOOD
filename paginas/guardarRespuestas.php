<?php
session_start();
include_once("modelo/preguntas/RespuestasCollector.php");

$usuario = $_POST['nombre'];
$apellido = $_POST['apellido'];
$preferencia = $_POST['preferencia'];
$desayunosalado = $_POST['desayunosalado'];
$desayunodulce = $_POST['desayunodulce'];
$almuerzo = $_POST['almuerzo'];
$cena = $_POST['cena'];
$comidatipica = $_POST['comidatipica'];
$carnes = $_POST['carnes'];
$postres = $_POST['postres'];
$saboresdulces = $_POST['saboresdulces'];
$bebida = $_POST['bebida'];
$comidaextranjera = $_POST['comidaextranjera'];
$nameUser=$usuario." ".$apellido;

$RespuestasCollectorObj = new RespuestasCollector();

?>
                                                                            

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        
    
    </head>
    <body>
        <?php
		  if (isset($_SESSION['usuario'])){
   
        echo "<p>Se guardaron sus respuestas  </p>";
        $RespuestasCollectorObj->createRespuesta($nameUser,$preferencia,$desayunosalado,$desayunodulce,$almuerzo,$cena,$comidatipica,$carnes,$postres,$saboresdulces,$bebida,$comidaextranjera);
               echo "<p>Se guardaron sus respuestas  </p>";
        }
                        ?>
  
    </body>
</html>