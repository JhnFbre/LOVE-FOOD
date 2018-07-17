<?php
session_start();
include_once("modelo/PersonaCollector.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contacto = $_POST['contacto'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$sexo = $_POST['sexo'];
$r  =   false;

$PersonaCollectorObj = new PersonaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOVE FOOD</title>
        <link rel="icon" href="../images/logoPeque.png">
        <link rel="stylesheet" href="../css/estilosPreguntas.css">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
       
    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php
                      if (isset($_SESSION['usuario'])){
                          //--
                            foreach ($PersonaCollectorObj->showPersonas() as $c){
                                if($c->getUsuario() == $usuario){
                                $r=true;
                            }
                        } 
                        //--------  
                        if($r==false){
                            
                        $PersonaCollectorObj->createPersona($nombre,$apellido,$contacto,$usuario,$clave,$sexo);
                            ?>
                          <div class='col-md-12 divError'>
                              
                              <img src='../images/corazones.gif' alt=''><br><br><br><br>
                              <h4 class="mensajeLoginError">Se creó un nuevo lover </h4><br><br><br><br>
                              <a href='../paginas/nuevoUsuario.php' class='btnRegresar'>Regresar</a>
                          </div>
                           <?php
                        }else{
                            echo "<div class='divError'>";
                            echo "<img src='../images/logoPeque.png' alt=''>";
                            echo "<h4 class='mensajeLoginError'>Usuario existente</h4>";
                            echo "</div>";
                            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1.5;URL=nuevoUsuario.php'>";
                        }
                      }
                ?>
                
            
          </div>
          </div>
    </body>
</html>