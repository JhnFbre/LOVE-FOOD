<?php
session_start();
$nombre = $_SESSION['nombre'];
?>
<?php
include_once("modelo/persona/PersonaCollector.php");

$PersonaCollectorObj = new PersonaCollector();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOVE FOOD</title>
    <link rel="stylesheet" href="../css/estilosPreguntas.css">
    <link rel="icon" href="../images/logoPesta%C3%B1a.png">
    <script type="text/javascript">
        //auto expand textarea
        function adjust_textarea(h) {
            h.style.height = "20px";
            h.style.height = (h.scrollHeight)+"px";
        }
    </script>
    
    
    
</head>
<body>
    <div class="barra">  
       <?php  
        echo '<h4>'.$nombre.'</h4>'
            ?>
        <hr><div class="menu">
           <a href="#">Ver usuarios</a>
        </div>
        
        <div class="salirSesion">
            <a href="../logout.php">Salir</a>
        </div>
        <div class="espacioLogo">
            <img src="../images/logoBlanco.png" alt="Logo Blanco LOVEFOOD" class="logoB">
        </div>
    </div>
    
          
    <!--<div class="centrar">
                <br>
                 <form class="login form-style-7" method="post" action="guardarUsuario.php">
                    <ul>
                    <li>
                        <label for="name">Nombre</label>
                        <input type="text" name="nombre" maxlength="100">
                        <span>Introduce tu nombre</span>
                    </li>
                    <li>
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" maxlength="100">
                        <span>Introduce tu apellido</span>
                    </li>
                    <li>
                        <label for="email">Email</label>
                        <input type="email" name="email" maxlength="100">
                        <span>Introduce tu email</span>
                    </li>
                    <li>
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" maxlength="100">
                        <span>Introduce tu usuario</span>
                    </li>
                    <li>
                        <label for="clave">Clave</label>
                        <input type="text" name="clave" maxlength="100">
                        <span>Introduce tu clave personal</span>
                    </li>
                    <li>
                        <input type="submit" value="REGISTRAR" >
                    </li>
                    </ul>
                </form> 

            </div>-->
   
</body>
</html>