<?php
session_start();
include_once("modelo/preguntas/RespuestasCollector.php");
$RespuestasCollectorObj = new RespuestasCollector();

$b=$_SESSION['id'];;
                    

       if (!isset($_SESSION['usuario'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>"; //Redireccion al index sin sesion
        }else{
           $nombre = $_SESSION['nombre'];
            $apellido = $_SESSION['apellido'];
            $usuario = $_SESSION['usuario'];
            $id = $_SESSION['id'];
           //Contenido de la pagina
           
           foreach ($RespuestasCollectorObj->showRespuestas() as $c){
                        if  ($c->getIdUsuario() == $b) {
                            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=paginaResultados.php'>";
                        }
                }
?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOVE FOOD</title>
    <link rel="stylesheet" href="../css/estilosPreguntas.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" href="../images/logoPeque.png">
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
        
        
        }
		 
    </script>
</head>
<body>
    <div class="barra">  
       
        <hr>
        <div class="menu" id="ocultar" style="display: none;">
           
           <br><br><br><a href="nuevoUsuario.php">Crear usuario</a>
           <br><br><br><a href="verUsuarios.php">Ver Usuarios</a>
           <br><br><br><a href="verPreguntas2.php">Ver Preguntas</a>
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
            <div><input type="hidden" name="idusuario" value="<?php echo $id;?>"></div>
            
            <h4>Preferencia</h4>
            <div class="row">
                <div class="col-md-6">
                <input type="radio" name="preferencia" value="hombre" required>Hombre<br>
                </div>
                <div class="col-md-6">
                <input type="radio" name="preferencia" value="mujer" required>Mujer<br>
                </div>
            </div>
            <h4>Desayuno Salado</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="desayunosalado" value="bollo" required>Bollo<br>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="desayunosalado" value="bolon" required>Bolón<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="desayunosalado" value="empanada" required>Empanada<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="desayunosalado" value="patacones" required>Patacones<br>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="desayunosalado" value="tigrillo" required>Tigrillo<br>
                </div>
            </div>
            <h4>Desayuno Dulce</h4>
            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="desayunodulce" value="waffles" required>Waffles<br>
                </div>
                <div class="col-md-6">    
                    <input type="radio" name="desayunodulce" value="panqueques" required>Panqueques<br>
                </div>
                <div class="col-md-6">    
                    <input type="radio" name="desayunodulce" value="cereal" required>Cereal<br>
                </div>
                <div class="col-md-6">    
                    <input type="radio" name="desayunodulce" value="galletas" required>Galletas<br>
                </div>
            </div>
            
            <h4>Almuerzo</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="almuerzo" value="yapingacho" required>Yapingacho<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="pescadomariscos" required>Pescado y mariscos<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="secopollo" required>Seco de Pollo<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="arrozmenestracarne" required>Arroz con menestra y carne<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="tallarines" required>Tallarines<br>
                </div>
                <div class="col-md-4">    
                    <input type="radio" name="almuerzo" value="arrozpurecarne" required>Arroz con pure y carne<br>
                </div>
            </div>
            <h4>Cena</h4>
            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="cena" value="carne" required>Carnes<br>
                </div>
                <div class="col-md-6">        
                    <input type="radio" name="cena" value="marisco" required>Mariscos<br>
                </div>
                <div class="col-md-6">        
                    <input type="radio" name="cena" value="ensalada" required>Ensaladas<br>
                </div>
                <div class="col-md-6">        
                    <input type="radio" name="cena" value="tegalleta" required>Té con galletas<br>
                </div>
            </div>
            <h4>Comidas Tipicas</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="comidatipica" value="encebollado" required>Encebollado<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="comidatipica" value="guatita" required>Guatita<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="comidatipica" value="fritada" required>Fritada<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="comidatipica" value="churrasco" required>Churrasco<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="comidatipica" value="yaguarlocro" required>Yaguarlocro<br>
                </div>
            </div>
            <h4>Carnes</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="carnes" value="carnes" required>Carnes<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="carnes" value="pollo" required>Pollo<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="carnes" value="chuleta" required>Chuletas<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="carnes" value="costilla" required>Costillas<br>
                </div>
                <div class="col-md-4">     
                    <input type="radio" name="carnes" value="embutido" required>Embutidos<br>
                </div>
            </div>
            
            <h4>Postres</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="postres" value="tiramisu" required>Tiramisú<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="helado" required>Helado<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="flan" required>Flan<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="tortachocolate" required>Torta de Chocolate<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="cheesecake" required>Cheesecake<br>
                </div>
                <div class="col-md-4">        
                    <input type="radio" name="postres" value="brownie" required>Brownies<br>
                </div>
            </div>
            <h4>Sabores Dulces</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="saboresdulces" value="chocolate" required>Chocolate<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="vainilla" required>Vainilla<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="fresa" required>Fresas<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="mora" required>Mora<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="rompasas" required>Rompasas<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="saboresdulces" value="Chicle" required>Chicle<br>
                </div>
            </div>
            <h4>Bebidas</h4>
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" name="bebida" value="cafe" required>Café<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="jugonatural" required>Jugo Natural<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="te" required>Té<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="vino" required>Vino<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="cocacola" required>Coca Cola<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="agua" required>Agua<br>
                </div>
                <div class="col-md-4">      
                    <input type="radio" name="bebida" value="cerveza" required>Cerveza<br>
                </div>
            </div>
            <h4>Comidas Extranjeras</h4>
            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="comidaextranjera" value="comidachina" required>Comida China<br>
                </div>
                <div class="col-md-6">      
                    <input type="radio" name="comidaextranjera" value="comidaitaliana" required>Comida Italiana<br>
                </div>
                <div class="col-md-6">      
                    <input type="radio" name="comidaextranjera" value="comidamexicana" required>Comida Mexicana<br>
                </div>
                <div class="col-md-6">      
                    <input type="radio" name="comidaextranjera" value="comidajaponesa" required>Comida Coreana<br>
                </div>
            </div>
            <button class="enviarPrg" type="submit" value="Enviar" id="boton">Enviar</button>
        </form>
<br><br>
       
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
        
        
        $user="<?php echo $usuario;?>";
        
        validarUsuario();
        function validarUsuario(){
            if($user == "ymsantan" ||$user == "jpvalle"||$user =="gpaort"){
                 $('#ocultar').css('display', 'block');
                //$("#ocultar").css("display", "block");
            }
        }
        
    </script>
</html>


<?php
}
?>
