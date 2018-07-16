<?php
session_start();

if (!isset($_SESSION['usuario'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>"; //Redireccion al index sin sesion
        }else{
            include_once("modelo/persona/PersonaCollector.php");

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $contacto = $_POST['contacto'];
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            $sexo = $_POST['sexo'];

            $PersonaCollectorObj = new PersonaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOVE FOOD</title>
        <link rel="stylesheet" href="../css/estilosIndex.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilosGuardarRespuesta.css">
        <link rel="icon" href="../images/logoPesta%C3%B1a.png">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        
    
    </head>
    <body>
        <div class="container">
            <div class="row">
               <img src="../images/logo.png" class="img-responsive modImagen" alt="">
                <?php
                      if (isset($_SESSION['usuario'])){
                        echo "<h4 class='cntrh4'>Se guardaron sus respuestas  </h4>";
                        $PersonaCollectorObj->createPersona($nombre,$apellido,$contacto,$usuario,$clave,$sexo);
                          echo "</div>";
                          echo "<div class='row'>";
                          echo "<a href='nuevoUsuario.php' class = 'botonRegresar'>Regresar </a>";
                          echo "</div>";
                          echo "<div class='row'>";
                          echo "<img src='../images/corazones.gif' class='resGif' alt=''>";
                          echo "</div>";
                      }
                ?>
                
            
          </div>
          </div>
    </body>
</html>
<?php
}
?>