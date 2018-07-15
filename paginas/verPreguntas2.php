<?php
session_start();
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
    <link rel="icon" href="../images/logoPesta%C3%B1a.png">
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
                    echo "<td class='IP'>" . $c->getId(). "</td>";
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
                    foreach ($RespuestasCollectorObj->showRespuestasLogeado($id) as $c){
                     // print_r ($c);
                    echo "<tr>";
                    echo "<td class='IP'>" . $c->getId(). "</td>";
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
                
               echo "<h4>" . $arrayRespuestasTmp[0] . "</h4>";
                ?>

            </table>
    </div>
          
   
</body>
</html>