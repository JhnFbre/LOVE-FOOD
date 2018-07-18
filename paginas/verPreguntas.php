<?php
session_start();

if (!isset($_SESSION['usuario'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>"; //Redireccion al index sin sesion
        }else{
            $nombre = $_SESSION['nombre'];
            $apellido = $_SESSION['apellido'];
            $usuario = $_SESSION['usuario'];
            $id = $_SESSION['id'];
            $sexo = $_SESSION['sexo'];
            ?>
            <?php
            include_once("modelo/RespuestasCollector.php");
            include_once("modelo/PersonaCollector.php");

            $RespuestasCollectorObj = new RespuestasCollector();
            $PersonaCollectorObj = new PersonaCollector();


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOVE FOOD</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/estilo2.css">
          
    <link rel="icon" href="../images/logoPeque.png">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../css/estilosPreguntas.css">
    <script type="text/javascript">
        //auto expand textarea
        function adjust_textarea(h) {
            h.style.height = "20px";
            h.style.height = (h.scrollHeight)+"px";
        }
    </script>
    
    
    
</head>
<body onload="ordenar()">
    <div class="barra">  
       <div class="menu">
           <?php  
            echo '<h2>'.$nombre.'</h2>'
            ?>
        </div>
        <hr>
        
        
        <div class="salirSesion">
            <a href="../logout.php">Salir</a>
        </div>
        <div class="espacioLogo">
            <img src="../images/logoBlanco.png" alt="Logo Blanco LOVEFOOD" class="logoB">
        </div>
    </div>
    

                <?php
                    $arrayRespuestasTmp = array();  
                    $arrayCoincidencias = array();
                    $arrayCoincidenciasPreguntas = array();
                    foreach ($RespuestasCollectorObj->showRespuestasLogeado($id) as $c){

                        array_push($arrayRespuestasTmp, $c->getRspPreferencia());
                        array_push($arrayRespuestasTmp, $c->getRspDesayunoSalado());
                        array_push($arrayRespuestasTmp, $c->getRspDesayunoDulce());
                        array_push($arrayRespuestasTmp, $c->getRspAlmuerzo());
                        array_push($arrayRespuestasTmp, $c->getRspCena());
                        array_push($arrayRespuestasTmp, $c->getRspComidaTipica());
                        array_push($arrayRespuestasTmp, $c->getRspCarnes());
                        array_push($arrayRespuestasTmp, $c->getRspPostres());
                        array_push($arrayRespuestasTmp, $c->getRspSaboresDulces());
                        array_push($arrayRespuestasTmp, $c->getRspBebida());
                        array_push($arrayRespuestasTmp, $c->getRspComidaExtranjera());
                        array_push($arrayRespuestasTmp, $id);
                        
                    }
                foreach ($RespuestasCollectorObj->showRespuestas() as $c){
                    $datosPersona = $PersonaCollectorObj->showPersonasId($c->getIdUsuario());
                    //echo "***** DATOS PERSONA ***** " . $datosPersona->getNombre()."<br>" ;
                     $nroCoincidencias = 0;
                    //MODIFICAR AQUI PARA VER RESPUESTAS DEL MISMO USUARIO PARA EL TESTING
                    if($arrayRespuestasTmp[11] != $c->getIdUsuario()){ //Valida que no sean las respuestas del usuario logeado
                        //echo "contadorrrr " . $nroCoincidencias ."<br>";
                               if($arrayRespuestasTmp[0] == $datosPersona->getSexo() && $sexo == $c->getRspPreferencia()){ //Comparar si la preferencia va acorde con el sexo del row de la persona
                                 
                                       if($arrayRespuestasTmp[1] == $c->getRspDesayunoSalado()){ //Contabilizar respuestas acertadas para el match
                                          $nroCoincidencias = $nroCoincidencias + 1;  
                                           //echo " Sumando + 1 ";
                                       } 
                                       if($arrayRespuestasTmp[2] == $c->getRspDesayunoDulce()){
                                           $nroCoincidencias = $nroCoincidencias + 1;
                                           //echo " Sumando + 1 ";
                                       }  
                                       if($arrayRespuestasTmp[3] == $c->getRspAlmuerzo()){
                                           $nroCoincidencias = $nroCoincidencias + 1;
                                           //echo " Sumando + 1 ";
                                       }  
                                       if($arrayRespuestasTmp[4] == $c->getRspCena()){
                                           $nroCoincidencias = $nroCoincidencias + 1;
                                           //echo " Sumando + 1 ";
                                       }  
                                       if($arrayRespuestasTmp[5] == $c->getRspComidaTipica()){
                                           $nroCoincidencias = $nroCoincidencias + 1;
                                           //echo " Sumando + 1 ";
                                       }  
                                       if($arrayRespuestasTmp[6] == $c->getRspCarnes()){
                                           $nroCoincidencias = $nroCoincidencias + 1;
                                           //echo " Sumando + 1 ";
                                       }  
                                       if($arrayRespuestasTmp[7] == $c->getRspPostres()){
                                           $nroCoincidencias = $nroCoincidencias + 1;
                                           //echo " Sumando + 1 ";
                                       }  
                                       if($arrayRespuestasTmp[8] == $c->getRspSaboresDulces()){
                                           $nroCoincidencias = $nroCoincidencias + 1;
                                           //echo " Sumando + 1 ";
                                       }  
                                       if($arrayRespuestasTmp[9] == $c->getRspBebida()){
                                           $nroCoincidencias = $nroCoincidencias + 1;
                                           //echo " Sumando + 1 ";
                                       }  
                                       if($arrayRespuestasTmp[10] == $c->getRspComidaExtranjera()){
                                           $nroCoincidencias = $nroCoincidencias + 1;
                                           //echo " Sumando + 1 ";
                                       } 
                                }
                       }
                        //echo "Coinciden <br>";
                    if($nroCoincidencias > 0){
                        array_push($arrayCoincidencias, $c);
                        array_push($arrayCoincidenciasPreguntas, $nroCoincidencias);
                        //echo "Posible pareja " .$c->getIdRespuesta()." con aciertos: " . $nroCoincidencias . "<br>";

                    }else{
                        //echo "No se encontraron coincidencias con este usuario = " . $c->getIdRespuesta() . "<br>";
                    }
                    
                    }
                   // echo "<h3> Nro de coincidencias para el user " . $c->getUsuario() . "=" . $nroCoincidencias ."</h3>";
                    
                
         ?>
                
                    <div class='slider'>
                        <table id="customers" class="descendente">
                            <tr>
                                
                                <th>Nombre</th>
                                <th>ID</th>
                                <th name="orden">Nro Coincidencias</th>
                                <th>Contacto</th>
                            </tr>
            <?php
                $count = 0;
                foreach ($arrayCoincidencias as $coincidencia){
                    $datosPersona2 = $PersonaCollectorObj->showPersonasId($coincidencia->getIdUsuario());
                    echo "<tr id='ocultar'>";
                   
                    echo "<td id=''>". $coincidencia->getUsuario() ."</td>";
                    echo "<td id=''>". $coincidencia->getIdUsuario() ."</td>";
                    echo "<td id=''>". $arrayCoincidenciasPreguntas[$count] ."</td>";
                    echo "<td id=''>" .$datosPersona2->getContacto() ."</td>";
                    
                    echo "</tr>";
                    $count = $count +1;
                    //echo "Esta persona tiene tus mismos gustos " . $coincidencia->getUsuario() ." con el ID: " . $coincidencia->getId(). "<br>";
                }
                ?>
         </table>
             <div class="container">
                 <div class="frase"><h1>¡Porque con la comida siempre se triunfa!</h1></div>
                  <div id="myCarousel" class="carousel slide divRsp" data-ride="carousel">
                    <!-- Indicators -->
                    

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" id="sliderRsps">
                      <div id="rsp1" class="item active">
                      <img src="" alt="">
                      <h1></h1>
                      <p></p>
                      </div>

                      <div id="rsp2" class="item">
                      <img src="" alt="">
                      <h1></h1>
                      <p></p>
                      </div>

                      <div id="rsp3" class="item">
                      <img src="" alt="">
                      <h1></h1>
                      <p></p>
                      </div>
                      
                      <div id="rsp4" class="item">
                      
                      <img src="" alt="">
                      <h1></h1>
                      <p></p>
                      </div>
                      
                      <div id="rsp5" class="item">
                      
                      <img src="" alt="">
                      <h1></h1>
                      <p></p>
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  
                </div>
               

        </div>
          
     
</body>
<script>
    function ordenar(){
        
         var table, rows, switching, i, x, y, shouldSwitch;
          table = document.getElementsByClassName("descendente")[0];
          switching = true;
          /*Make a loop that will continue until
          no switching has been done:*/
          while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.getElementsByTagName("TR");
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                    for (i = 1; i < (rows.length - 1); i++) {
                          //start by saying there should be no switching:
                          shouldSwitch = false;
                          /*Get the two elements you want to compare,
                          one from current row and one from the next:*/
                          x = rows[i].getElementsByTagName("TD")[2];
                          y = rows[i + 1].getElementsByTagName("TD")[2];
                          //check if the two rows should switch place:
                          if (Number(x.innerHTML) < Number(y.innerHTML)) {
                                //if so, mark as a switch and break the loop:
                                shouldSwitch = true;
                                break;s
                          }
                    }
                    if (shouldSwitch) {
                          /*If a switch has been marked, make the switch
                          and mark that a switch has been done:*/
                          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                          switching = true;
                    }
          }
        topFiveMatch();
        llenarSlider();
    }
    function topFiveMatch(){
        $(".descendente tr").each(function(i,data){
            if(i>5){
               data.remove();
            }
        });
    }
    function llenarSlider(){
        console.log($("#sliderRsps div"));
        $("#sliderRsps div").each(function(i,data){
            console.log($(".descendente tr")[i+1].children[2].innerHTML);
            switch($(".descendente tr")[i+1].children[2].innerHTML) {
                case "10":
                    data.children[0].setAttribute("src","../images/100.png");
                    break;
                case "9":
                    data.children[0].setAttribute("src","../images/90.png");
                    break;
                case "8":
                    data.children[0].setAttribute("src","../images/80.png");
                    break;
                case "7":
                    data.children[0].setAttribute("src","../images/70.png");
                    break;
                case "6":
                    data.children[0].setAttribute("src","../images/60.png");
                    break;
                case "5":
                    data.children[0].setAttribute("src","../images/50.png");
                    break;
                case "4":
                    data.children[0].setAttribute("src","../images/40.png");
                    break;
                case "3":
                    data.children[0].setAttribute("src","../images/30.png");
                    break;
                case "2":
                    data.children[0].setAttribute("src","../images/20.png");
                    break;
                case "1":
                    data.children[0].setAttribute("src","../images/10.png");
                    break;
                default:
                    data.children[0].setAttribute("src","../images/corazones.gif");
            }
            
            data.children[1].innerHTML=$(".descendente tr")[i+1].firstElementChild.innerHTML;
            data.children[2].innerHTML=$(".descendente tr")[i+1].lastElementChild.innerHTML;
        });
    }
	
</script>

</html>
<?php
}
?>