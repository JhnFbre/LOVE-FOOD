<?php
session_start();
  $nombre=$_GET["Nombre"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOVE FOOD</title>
    <link rel="stylesheet" href="../css/estilosPreguntas.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" href="../images/logoPesta%C3%B1a.png">
</head>
<body>
    <div class="barra">  
       <?php  
    echo '<h4>'.$nombre.'</h4>'
            ?>
        <hr>
           <div class="menu">
            <a href="nuevoUsuario.php?Nombre=". nombre(). "">Crear usuario</a>
           <a href="#">Ver Usuarios</a>
        </div>
        <div class="salirSesion">
            <a href="../index.php">Salir</a>
        </div>
        <div class="espacioLogo">
            <img src="../images/logoBlanco.png" alt="Logo Blanco LOVEFOOD" class="logoB">
        </div>
    </div>
    <div class="placePreguntas">
        <h2>Preguntas</h2>
        <form action="">
            <h4>Que prefieres comer:</h4>
            <input type="radio" name="seafood" value="ceviche">Ceviche<br>
            <input type="radio" name="seafood" value="encebollado">Encebollado<br>

            <h4>Que prefieres comer:</h4>
            <input type="radio" name="vegeocarne" value="ensalada">Ensalada<br>
            <input type="radio" name="vegeocarne" value="burguer">Hamburguesa<br>
            
            <h4>Que prefieres comer:</h4>
            <input type="radio" name="tortaoempa" value="torta">Torta<br>
            <input type="radio" name="tortaoempa" value="empanada">Empanada<br>
            
            <h4>Que prefieres comer:</h4>
            <input type="radio" name="seafood" value="ceviche">Ceviche<br>
            <input type="radio" name="seafood" value="encebollado">Encebollado<br>

            <h4>Que prefieres comer:</h4>
            <input type="radio" name="vegeocarne" value="ensalada">Ensalada<br>
            <input type="radio" name="vegeocarne" value="burguer">Hamburguesa<br>
            
            <h4>Que prefieres comer:</h4>
            <input type="radio" name="tortaoempa" value="torta">Torta<br>
            <input type="radio" name="tortaoempa" value="empanada">Empanada<br>
            
            <h4>Que prefieres comer:</h4>
            <input type="radio" name="seafood" value="ceviche">Ceviche<br>
            <input type="radio" name="seafood" value="encebollado">Encebollado<br>

            <h4>Que prefieres comer:</h4>
            <input type="radio" name="vegeocarne" value="ensalada">Ensalada<br>
            <input type="radio" name="vegeocarne" value="burguer">Hamburguesa<br>
            
            <h4>Que prefieres comer:</h4>
            <input type="radio" name="tortaoempa" value="torta">Torta<br>
            <input type="radio" name="tortaoempa" value="empanada">Empanada<br>
            
            <h4>Que prefieres comer:</h4>
            <input type="radio" name="seafood" value="ceviche">Ceviche<br>
            <input type="radio" name="seafood" value="encebollado">Encebollado<br>

            <h4>Que prefieres comer:</h4>
            <input type="radio" name="vegeocarne" value="ensalada">Ensalada<br>
            <input type="radio" name="vegeocarne" value="burguer">Hamburguesa<br>
            
            <h4>Que prefieres comer:</h4>
            <input type="radio" name="tortaoempa" value="torta">Torta<br>
            <input type="radio" name="tortaoempa" value="empanada">Empanada<br>
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>