<?php
session_start();
include_once("modelo/preguntas/RespuestasCollector.php");

$usuario = $_POST['nombre'];
$apellido = $_POST['apellido'];
$idusuario = $_POST['idusuario'];
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
        <title>LOVE FOOD</title>
        <link rel="stylesheet" href="../css/estilosIndex.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="icon" href="../images/logoPesta%C3%B1a.png">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        
    
    </head>
    <body>
       <div class="container">
            <div class="row">
               <img src="../images/logoPng.png" alt="">
                <?php
                      if (isset($_SESSION['usuario'])){
                         echo "<h4>Se guardaron sus respuestas  </h4>";
                $RespuestasCollectorObj->createRespuesta($idusuario,$usuario,$preferencia,$desayunosalado,$desayunodulce,$almuerzo,$cena,$comidatipica,$carnes,$postres,$saboresdulces,$bebida,$comidaextranjera);
                          echo "</div>";
                          echo "<div class='row'>";
                          echo "<a href='paginaPreguntas.php' class = 'botonRegresar'>Regresar </a>";
                          echo "</div>";
                          echo "<div class='row'>";
                          echo "<img src='../images/corazones.gif' alt=''>";
                          echo "</div>";
                      }
                ?>
                
            
          </div>

  </div>
    </body>
</html>