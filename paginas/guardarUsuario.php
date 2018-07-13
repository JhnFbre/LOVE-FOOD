<?php
session_start();
include_once("modelo/persona/PersonaCollector.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$PersonaCollectorObj = new PersonaCollector();
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
               <img src="../images/logo.png" alt="">
                <?php
                      if (isset($_SESSION['usuario'])){
                        echo "<h4>Se creó un nuevo lover </h4>";
                        $PersonaCollectorObj->createPersona($nombre,$apellido,$email,$usuario,$clave);
                          echo "</div>";
                          echo "<div class='row'>";
                          echo "<a href='../nuevoUsuario.php' class = 'botonRegresar'>Regresar </a>";
                          echo "</div>";
                          echo "<div class='row'>";
                          echo "<img src='../images/corazones.gif' alt=''>";
                          echo "</div>";
                      }
                ?>
                
            
          </div>
    </body>
</html>
