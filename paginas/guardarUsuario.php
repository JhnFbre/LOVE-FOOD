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
        <title></title>
        
    
    </head>
    <body>
        
        <?php
		  if (isset($_SESSION['usuario'])){
   
        echo "<p>Se creo un  nuevo usuario </p>";
        $PersonaCollectorObj->createPersona($nombre,$apellido,$email,$usuario,$clave);
        }
                        ?>
  
    </body>
</html>
