<?php
session_start();
include_once("modelo/RespuestasCollector.php");
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
           
?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOVE FOOD</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/estilosPreguntas.css">
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
        
        
        validarRsp();
        function validarRsp(){
            alert("hbsjdbnjs");
            <?php
           $b=2;
                    foreach ($RespuestasCollectorObj->showRespuestas() as $c){
                     // print_r ($c);
                    echo "<td class='NO'>" . $c->getIdUsuario() . "</td>";  
                        if  ($c->getIdUsuario() == $b) {
                            echo "a es mayor que b";
                        }else{
                            echo "no entro";
                        }
                }

                ?>
        }
		 
    </script>
</head>
<body>
    <div class="barra">  
        <?php  
        echo '<h4>'.$nombre.'</h4>'
            ?>  
        <hr>
        <div class="menu" id="ocultar" style="display: none;">
            <a href="nuevoUsuario.php">Crear usuario</a>
           <a href="verUsuarios.php">Ver Usuarios</a>
           <a href="verPreguntas.php">Ver Preguntas</a>
        </div>
        <div class="salirSesion">
            <a href="../logout.php">Salir</a>
        </div>
        <div class="espacioLogo">
            <img src="../images/logoBlanco.png" alt="Logo Blanco LOVEFOOD" class="logoB">
        </div>
    </div>
    
   <div class="placeImgEspera">
    <div class="imgEspera">
    <img src="../images/foto.jpg" class="esperando"alt=""><br><br>
    <h2>Muy pronto conocerás a tu pareja ideal..</h2>
    <br>
    <a class="enviarPrg" href="verPreguntas.php" >¡Conocer mi pareja comelona ahora!</a>
    </div>
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
