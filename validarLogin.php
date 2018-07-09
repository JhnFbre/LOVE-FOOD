<?php
include_once("paginas/modelo/persona/PersonaCollector.php");
session_start();
$usuario = $_POST['user'];
$clave = $_POST['password'];

$PersonaCollectorObj = new PersonaCollector();

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
       
        <?php

        foreach ($PersonaCollectorObj->showPersonas() as $c){
            if($c->getUsuario() == $usuario && $c->getClave() == $clave){
               
                $_SESSION['usuario']= $usuario;
                $_SESSION['clave']= $clave;
                 
		        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=paginas/paginaPreguntas.php?Nombre=". $c->getNombre(). "'>";
                
            }
        }
        if (!isset($_SESSION['user'])){
        ?>
            
            <h4>Usuario o contraseña incorrecta</h4>
            <a href="login.php"><button class="boton">Regresar</button></a>
                
        
        <?php
             
        }
		
	   ?>
            
    </body>
</html>