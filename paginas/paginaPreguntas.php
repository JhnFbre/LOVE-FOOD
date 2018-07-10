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
            <input type="radio" name="preferencia" value="hombre">Hombre<br>
            <input type="radio" name="preferencia" value="mujer">Mujer<br>

            <h4>Desayuno Salado</h4>
            <input type="radio" name="desayunosalado" value="bollo">Bollo<br>
            <input type="radio" name="desayunosalado" value="bolon">Bolón<br>
            <input type="radio" name="desayunosalado" value="empanada">Empanada<br>
            <input type="radio" name="desayunosalado" value="patacones">Patacones<br>
            <input type="radio" name="desayunosalado" value="tigrillo">Tigrillo<br>
            
            <h4>Desayuno Dulce</h4>
            <input type="radio" name="desayunodulce" value="waffles">Waffles<br>
            <input type="radio" name="desayunodulce" value="panqueques">Panqueques<br>
            <input type="radio" name="desayunodulce" value="cereal">Cereal<br>
            <input type="radio" name="desayunodulce" value="galletas">Galletas<br>
            
            <h4>Almuerzo</h4>
            <input type="radio" name="almuerzo" value="yapingacho">Yapingacho<br>
            <input type="radio" name="almuerzo" value="pescadomariscos">Pescado y mariscos<br>
            <input type="radio" name="almuerzo" value="secopollo">Seco de Pollo<br>
            <input type="radio" name="almuerzo" value="arrozmenestracarne">Arroz con menestra y carne<br>
            <input type="radio" name="almuerzo" value="tallarines">Tallarines<br>
            <input type="radio" name="almuerzo" value="arrozpurecarne">Arroz con pure y carne<br>
            
            <h4>Cena</h4>
            <input type="radio" name="cena" value="carne">Carnes<br>
            <input type="radio" name="cena" value="marisco">Mariscos<br>
            <input type="radio" name="cena" value="ensalada">Ensaladas<br>
            <input type="radio" name="cena" value="tegalleta">Té con galletas<br>
            
            <h4>Comidas Tipicas</h4>
            <input type="radio" name="comidatipica" value="encebollado">Encebollado<br>
            <input type="radio" name="comidatipica" value="guatita">Guatita<br>
            <input type="radio" name="comidatipica" value="fritada">Fritada<br>
            <input type="radio" name="comidatipica" value="churrasco">Churrasco<br>
            <input type="radio" name="comidatipica" value="yaguarlocro">Yaguarlocro<br>
            
            <h4>Carnes</h4>
            <input type="radio" name="carnes" value="carnes">Carnes<br>
            <input type="radio" name="carnes" value="pollo">Pollo<br>
            <input type="radio" name="carnes" value="chuleta">Chuletas<br>
            <input type="radio" name="carnes" value="costilla">Costillas<br>
            <input type="radio" name="carnes" value="embutido">Embutidos<br>
            
            <h4>Postres</h4>
            <input type="radio" name="postres" value="tiramisu">Tiramisú<br>
            <input type="radio" name="postres" value="helado">Helado<br>
            <input type="radio" name="postres" value="flan">Flan<br>
            <input type="radio" name="postres" value="tortachocolate">Torta de Chocolate<br>
            <input type="radio" name="postres" value="cheesecake">Cheesecake<br>
            <input type="radio" name="postres" value="brownie">Brownies<br>
            
            <h4>Sabores Dulces</h4>
            <input type="radio" name="saboresdulces" value="chocolate">Chocolate<br>
            <input type="radio" name="saboresdulces" value="vainilla">Vainilla<br>
            <input type="radio" name="saboresdulces" value="fresa">Fresas<br>
            <input type="radio" name="saboresdulces" value="mora">Mora<br>
            <input type="radio" name="saboresdulces" value="rompasas">Rompasas<br>
            <input type="radio" name="saboresdulces" value="Chicle">Chicle<br>
            
            <h4>Bebidas</h4>
            <input type="radio" name="bebida" value="cafe">Café<br>
            <input type="radio" name="bebida" value="jugonatural">Jugo Natural<br>
            <input type="radio" name="bebida" value="te">Té<br>
            <input type="radio" name="bebida" value="vino">Vino<br>
            <input type="radio" name="bebida" value="cocacola">Coca Cola<br>
            <input type="radio" name="bebida" value="agua">Agua<br>
            <input type="radio" name="bebida" value="cerveza">Cerveza<br>
            
            <h4>Comidas Extranjeras</h4>
            <input type="radio" name="comidaextranjera" value="comidachina">Comida China<br>
            <input type="radio" name="comidaextranjera" value="comidaitaliana">Comida Italiana<br>
            <input type="radio" name="comidaextranjera" value="comidamexicana">Comida Mexicana<br>
            <input type="radio" name="comidaextranjera" value="comidajaponesa">Comida Japonesa<br>
            
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>