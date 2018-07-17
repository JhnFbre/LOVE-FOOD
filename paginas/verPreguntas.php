<?php
session_start();

if (!isset($_SESSION['usuario'])){
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>"; //Redireccion al index sin sesion
        }else{
            $nombre = $_SESSION['nombre'];
            $apellido = $_SESSION['apellido'];
            $usuario = $_SESSION['usuario'];
            $id = $_SESSION['id'];
            ?>
            <?php
            include_once("modelo/preguntas/RespuestasCollector.php");


            $RespuestasCollectorObj = new RespuestasCollector();


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOVE FOOD</title>
    <link rel="stylesheet" href="../css/estilosPreguntas.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/estilo2.css">
    <link rel="icon" href="../images/logoPeque.png">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo.css">
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
           <a href="nuevoUsuario.php">Crear Usuario</a>
        </div>
        
        <div class="salirSesion">
            <a href="../logout.php">Salir</a>
        </div>
        <div class="espacioLogo">
            <img src="../images/logoBlanco.png" alt="Logo Blanco LOVEFOOD" class="logoB">
        </div>
    </div>
    
    <div class="titulo"><h1>Lista de Respuestas</h1></div>
   <div class="centrar2">
     <table id="customers">
                <tr>    
                    <th class='IP'>Id</th>
                    <th class='IP'>IdUsuario</th>
                    <th class='NO' >Usuario</th>
                    <th class='AP'>preferencia</th>
                    <th class='EM'>desayuno salado</th>
                    <th class='US'>desayuno dulce</th>
                     <th class='CL'>almuerzo</th>
                     <th class='CL'>cena</th>
                     <th class='CL'>comida tipica</th>
                     <th class='CL'>carnes</th>
                     <th class='CL'>postres</th>
                     <th class='CL'>sabores dulces</th>
                     <th class='CL'>bebidas</th>
                     <th class='CL'>comida extranjera</th>
                   
                </tr>
                <?php
                    foreach ($RespuestasCollectorObj->showRespuestas() as $c){
                     // print_r ($c);
                    echo "<tr>";
                    echo "<td class='IP'>" . $c->getIdRespuesta(). "</td>";
                    echo "<td class='NO'>" . $c->getIdUsuario() . "</td>";             
                    echo "<td class='NO'>" . $c->getUsuario() . "</td>";             
                    echo "<td class='AP'>" . $c->getRspPreferencia() . "</td>";   
                    echo "<td class='EM'>" . $c->getRspDesayunoSalado() . "</td>";   
                    echo "<td class='US'>" . $c->getRspDesayunoDulce() . "</td>";
                    echo "<td class='CL'>" . $c->getRspAlmuerzo() . "</td>"; 
                        echo "<td class='CL'>" . $c->getRspCena() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspComidaTipica() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspCarnes() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspPostres() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspSaboresDulces() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspBebida() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspComidaExtranjera() . "</td>";  
                        
                        echo "</tr>";

                }

                ?>

            </table>
    </div>
         <div class="titulo"><h1>Lista de Respuestas usuario logeado</h1></div>
   <div class="centrar2">
     <table id="customers">
                <tr>    
                    <th class='IP'>Id</th>
                    <th class='IP'>IdUsuario</th>
                    <th class='NO' >Usuario</th>
                    <th class='AP'>preferencia</th>
                    <th class='EM'>desayuno salado</th>
                    <th class='US'>desayuno dulce</th>
                     <th class='CL'>almuerzo</th>
                     <th class='CL'>cena</th>
                     <th class='CL'>comida tipica</th>
                     <th class='CL'>carnes</th>
                     <th class='CL'>postres</th>
                     <th class='CL'>sabores dulces</th>
                     <th class='CL'>bebidas</th>
                     <th class='CL'>comida extranjera</th>
                   
                </tr>
                <?php
                    $arrayRespuestasTmp = array();  
                    $arrayCoincidencias = array();
                    $arrayCoincidenciasPreguntas = array();
                    foreach ($RespuestasCollectorObj->showRespuestasLogeado($id) as $c){
                     // print_r ($c);
                    echo "<tr>";
                    echo "<td class='IP'>" . $c->getIdRespuesta(). "</td>";
                    echo "<td class='NO'>" . $c->getIdUsuario() . "</td>";             
                    echo "<td class='NO'>" . $c->getUsuario() . "</td>";             
                    echo "<td class='AP'>" . $c->getRspPreferencia() . "</td>";   
                    echo "<td class='EM'>" . $c->getRspDesayunoSalado() . "</td>";   
                    echo "<td class='US'>" . $c->getRspDesayunoDulce() . "</td>";
                    echo "<td class='CL'>" . $c->getRspAlmuerzo() . "</td>"; 
                        echo "<td class='CL'>" . $c->getRspCena() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspComidaTipica() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspCarnes() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspPostres() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspSaboresDulces() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspBebida() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspComidaExtranjera() . "</td>";  
                        
                        echo "</tr>";
        
                            /*($c{'iduser'},$c{'idusuario'},$c{'usuario'},$c{'rsppreferencia'},$c{'rspdesayunosalado'},$c{'rspdesayunodulce'},$c{'rspalmuerzo'},$c{'rspcena'},$c{'rspcomidatipica'},$c{'rspcarnes'},$c{'rsppostres'},$c{'rspsaboresdulces'},$c{'rspbebida'},$c{'rspcomidaextranjera'});
                        */
                        
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
                        

                }
         echo "</div>";
         echo "</table>"; 
                
               //echo "<h4>Objeto " . $RespuestasLogeado->getId(). "</h4>";
               echo "<h4 Arreglo >" . $arrayRespuestasTmp[0] . "</h4>";
                foreach ($RespuestasCollectorObj->showRespuestas() as $c){

                     $nroCoincidencias = 0;
                    if($arrayRespuestasTmp[11] != $c->getIdUsuario()){ //Valida que no sean las respuestas del usuario logeado
                        echo "contadorrrr " . $nroCoincidencias ."<br>";
                               if($arrayRespuestasTmp[0] == $c->getRspPreferencia()){ //Comparar las respuestas para sumar coincidencias en preguntas
                                  $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               }  
                               if($arrayRespuestasTmp[1] == $c->getRspDesayunoSalado()){
                                  $nroCoincidencias = $nroCoincidencias + 1;  
                                   echo " Sumando + 1 ";
                               } 
                               if($arrayRespuestasTmp[2] == $c->getRspDesayunoDulce()){
                                   $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               }  
                               if($arrayRespuestasTmp[3] == $c->getRspAlmuerzo()){
                                   $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               }  
                               if($arrayRespuestasTmp[4] == $c->getRspCena()){
                                   $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               }  
                               if($arrayRespuestasTmp[5] == $c->getRspComidaTipica()){
                                   $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               }  
                               if($arrayRespuestasTmp[6] == $c->getRspCarnes()){
                                   $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               }  
                               if($arrayRespuestasTmp[7] == $c->getRspPostres()){
                                   $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               }  
                               if($arrayRespuestasTmp[8] == $c->getRspSaboresDulces()){
                                   $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               }  
                               if($arrayRespuestasTmp[9] == $c->getRspBebida()){
                                   $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               }  
                               if($arrayRespuestasTmp[10] == $c->getRspComidaExtranjera()){
                                   $nroCoincidencias = $nroCoincidencias + 1;
                                   echo " Sumando + 1 ";
                               } 
                       }
                        //echo "Coinciden <br>";
                    if($nroCoincidencias > 0){
                        array_push($arrayCoincidencias, $c);
                        array_push($arrayCoincidenciasPreguntas, $nroCoincidencias);
                        echo "Posible pareja " .$c->getIdRespuesta()." con aciertos: " . $nroCoincidencias . "<br>";

                    }else{
                        echo "No se encontraron coincidencias con este usuario = " . $c->getIdRespuesta() . "<br>";
                    }
                    
                    }
                   // echo "<h3> Nro de coincidencias para el user " . $c->getUsuario() . "=" . $nroCoincidencias ."</h3>";
                    
                
         ?>
                <div class ='titulo'><h1>¡Tus posibles parejas de comida ideal!</h1></div>
                    <div class='centrar2'>
                        <table id='customers'>
                            <tr>
                                
                                <th>Nombre</th>
                                <th>ID</th>
                                <th>Nro Coincidencias</th>
                                <th>Contacto</th>
                            </tr>
            <?php
                $count = 0;
                foreach ($arrayCoincidencias as $coincidencia){
                    echo "<tr>";
                   
                    echo "<td>". $coincidencia->getUsuario() ."</td>";
                    echo "<td>". $coincidencia->getIdUsuario() ."</td>";
                    echo "<td>". $arrayCoincidenciasPreguntas[$count] ."</td>";
                    echo "<td>". " contacto " ."</td>";
                    
                    echo "</tr>";
                    $count = $count +1;
                    //echo "Esta persona tiene tus mismos gustos " . $coincidencia->getUsuario() ." con el ID: " . $coincidencia->getId(). "<br>";
                }
                ?>
         </div>
         </table> 

            </table>
    </div>
          
   
</body>
</html>
<?php
}
?>