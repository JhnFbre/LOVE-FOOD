<?php
session_start();
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOVE FOOD</title>
    <link rel="stylesheet" href="../css/estilosPreguntas.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" href="../images/logoPesta%C3%B1a.png">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script>
    $(function(){
          var $jittery = $('.jiterry'),
              aText    = $jittery.text().split(''),
              letters = '';

          for(var i = 0; i < aText.length; i++){
            letters += '<span>'+aText[i]+'</span>';
          }

          $jittery.empty().append(letters);

          $.each($('span', $jittery), function(i){
            $(this).css('animation-delay', '-'+i+'70ms');
          });
        });
        
        
        $("#boton").click(function () {	 
			alert($('input:radio[name=desayunosalado]:checked').val());
			});
		 
    </script>
</head>
<body>
    <div class="barra">  
       <?php  
        echo '<h4>'.$nombre.'</h4>'
            ?>
        <hr>
        <div class="menu">
            <a href="nuevoUsuario.php">Crear usuario</a>
           <a href="verUsuarios.php">Ver Usuarios</a>
        </div>
        <div class="salirSesion">
            <a href="../logout.php">Salir</a>
        </div>
        <div class="espacioLogo">
            <img src="../images/logoBlanco.png" alt="Logo Blanco LOVEFOOD" class="logoB">
        </div>
    </div>
    <div class="placePreguntas">
        <h2><span class="jiterry">Preguntas</span></h2>
        
        <form method="post" action="guardarRespuestas.php">
            
            <div><input type="hidden" name="nombre" value="<?php echo $nombre;?>"></div>
            <div><input type="hidden" name="apellido" value="<?php echo $apellido;?>"></div>
            
            <h4>Preferencia</h4>
            <div class="row">
                <div class="col-md-6">
                <input type="radio" name="preferencia" value="hombre">Hombre<br>
                </div>
                <div class="col-md-6">
                <input type="radio" name="preferencia" value="mujer">Mujer<br>
                </div>
            </div>
            <h4>Desayuno Salado</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="desayunosalado" value="bollo">Bollo<br>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="desayunosalado" value="bolon">Bolón<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="desayunosalado" value="empanada">Empanada<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="desayunosalado" value="patacones">Patacones<br>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="desayunosalado" value="tigrillo">Tigrillo<br>
                </div>
            </div>
            <h4>Desayuno Dulce</h4>
            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="desayunodulce" value="waffles">Waffles<br>
                </div>
                <div class="col-md-6">    
                    <input type="radio" name="desayunodulce" value="panqueques">Panqueques<br>
                </div>
                <div class="col-md-6">    
                    <input type="radio" name="desayunodulce" value="cereal">Cereal<br>
                </div>
                <div class="col-md-6">    
                    <input type="radio" name="desayunodulce" value="galletas">Galletas<br>
                </div>
            </div>
            
            <h4>Almuerzo</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="almuerzo" value="yapingacho">Yapingacho<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="pescadomariscos">Pescado y mariscos<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="secopollo">Seco de Pollo<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="arrozmenestracarne">Arroz con menestra y carne<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="tallarines">Tallarines<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="arrozpurecarne">Arroz con pure y carne<br>
                </div>
            </div>
            <h4>Cena</h4>
            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="cena" value="carne">Carnes<br>
                </div>
                <div class="col-md-6">        
                    <input type="radio" name="cena" value="marisco">Mariscos<br>
                </div>
                <div class="col-md-6">        
                    <input type="radio" name="cena" value="ensalada">Ensaladas<br>
                </div>
                <div class="col-md-6">        
                    <input type="radio" name="cena" value="tegalleta">Té con galletas<br>
                </div>
            </div>
            <h4>Comidas Tipicas</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="comidatipica" value="encebollado">Encebollado<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="comidatipica" value="guatita">Guatita<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="comidatipica" value="fritada">Fritada<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="comidatipica" value="churrasco">Churrasco<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="comidatipica" value="yaguarlocro">Yaguarlocro<br>
                </div>
            </div>
            <h4>Carnes</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="carnes" value="carnes">Carnes<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="carnes" value="pollo">Pollo<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="carnes" value="chuleta">Chuletas<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="carnes" value="costilla">Costillas<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="carnes" value="embutido">Embutidos<br>
                </div>
            </div>
            
            <h4>Postres</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="postres" value="tiramisu">Tiramisú<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="helado">Helado<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="flan">Flan<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="tortachocolate">Torta de Chocolate<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="cheesecake">Cheesecake<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="brownie">Brownies<br>
                </div>
            </div>
            <h4>Sabores Dulces</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="saboresdulces" value="chocolate">Chocolate<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="vainilla">Vainilla<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="fresa">Fresas<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="mora">Mora<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="rompasas">Rompasas<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="Chicle">Chicle<br>
                </div>
            </div>
            <h4>Bebidas</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="bebida" value="cafe">Café<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="jugonatural">Jugo Natural<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="te">Té<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="vino">Vino<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="cocacola">Coca Cola<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="agua">Agua<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="cerveza">Cerveza<br>
                </div>
            </div>
            <h4>Comidas Extranjeras</h4>
            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="comidaextranjera" value="comidachina">Comida China<br>
                </div>
                <div class="col-md-6">      
                    <input type="radio" name="comidaextranjera" value="comidaitaliana">Comida Italiana<br>
                </div>
                <div class="col-md-6">      
                    <input type="radio" name="comidaextranjera" value="comidamexicana">Comida Mexicana<br>
                </div>
                <div class="col-md-6">      
                    <input type="radio" name="comidaextranjera" value="comidajaponesa">Comida Japonesa<br>
                </div>
            </div>
            <input class="enviarPrg" type="submit" value="Enviar" id="boton">
        </form>
        
       
    </div>
    
</body>
    <script>
        $rpDatos=[];
    $(function(){
          var $jittery = $('.jiterry'),
              aText    = $jittery.text().split(''),
              letters = '';

          for(var i = 0; i < aText.length; i++){
            letters += '<span>'+aText[i]+'</span>';
          }

          $jittery.empty().append(letters);

          $.each($('span', $jittery), function(i){
            $(this).css('animation-delay', '-'+i+'70ms');
          });
        });
        
    </script>
</html>