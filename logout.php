<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logout</title>
        <style>
            .divError{text-align: center}
            .mensajeLoginError{
                font-size: 30px;
            }
            img{width: 100px}
        </style>
    </head>
    <body>
	
	<?php
        if (isset($_SESSION['usuario'])){
               session_destroy();
               ?>
               <div class="divError">
               <img src="images/logoPesta%C3%B1a.png" alt="">
               <h4 class="mensajeLoginError">Cerrando Sesión</h4>
               </div>
               <?php
               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=index.php'>";
        }else{  
        }
	?>

    </body>
</html>