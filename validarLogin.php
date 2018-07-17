<?php
include_once("paginas/modelo/PersonaCollector.php");
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
        <style>
            .divError{text-align: center}
            .mensajeLoginError{
                font-size: 30px;
                font-family: courier;
            }
            img{width: 100px}
        </style>
    </head>
    <body>
       
        <?php

        foreach ($PersonaCollectorObj->showPersonas() as $c){
            if($c->getUsuario() == $usuario && $c->getClave() == $clave){
               
                $_SESSION['usuario']= $usuario;
                $_SESSION['clave']= $clave;
                $_SESSION['nombre']= $c->getNombre();
                $_SESSION['apellido']= $c->getApellido();
                $_SESSION['id']= $c->getIdPersona();
                 
		        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=paginas/paginaPreguntas.php'>";
                
            }
        }
        if (!isset($_SESSION['usuario'])){
        ?>
            <div class="divError">
                <img src="images/logoPeque.png" alt="">
                <h4 class="mensajeLoginError">Usuario o contraseña incorrecta</h4>
            </div>
            <?php
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1.5;URL=index.php'>";
             
        }
		
	   ?>
            
    </body>
</html>