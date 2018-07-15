<?php
session_start();
$nombre = $_SESSION['nombre'];
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
    

   
         
    <div class="titulo"><h1>Lista de preguntas</h1></div>
   <div class="centrar2">
     <table id="customers">
                <tr>    
                    <th >getIdRespuesta</th>
                    <th >getUsuario</th>
                    <th >getRspPreferencia</th>
                    <th >getRspDesayunoSalado</th>
                    <th >getRspDesayunoDulce</th>
                     <th >getRspAlmuerzo</th>
                     <th >getRspCena</th>
                    <th  >getRspComidaTipica</th>
                    <th >getRspCarnes</th>
                    <th >getRspPostres</th>
                    <th >getRspSaboresDulces</th>
                     <th >getRspBebida</th>
                     <th >getRspComidaExtranjera</th>
                   
                </tr>
                <?php
                    echo "oli";
                    foreach ($RespuestasCollectorObj->showRespuestas() as $resp){
                    echo "<tr>";
                        echo "oli adentro";
                        echo "<td >oli</td>";
                        echo "<td >" . $resp->getsomething() . "</td>";
                    echo "</tr>";
                   
                    echo "<td class='IP'>" . $resp->getId() . "</td>";
                    echo "<td class='NO'>" . $resp->getUsuario() . "</td>";             
                    echo "<td class='AP'>" . $resp->getRspPreferencia() . "</td>";   
                    echo "<td class='EM'>" . $resp->getRspDesayunoSalado() . "</td>";   
                    echo "<td class='US'>" . $resp->getRspDesayunoDulce() . "</td>";
                    echo "<td class='CL'>" . $resp->getRspAlmuerzo() . "</td>";  
                    echo "<td class='IP'>" . $resp->getRspCena() . "</td>";
                    echo "<td class='NO'>" . $resp->getRspComidaTipica() . "</td>";             
                    echo "<td class='AP'>" . $resp->getRspCarnes() . "</td>";   
                    echo "<td class='EM'>" . $resp->getRspPostres() . "</td>";   
                    echo "<td class='US'>" . $resp->getRspSaboresDulces() . "</td>";
                    echo "<td class='CL'>" . $resp->getRspBebida() . "</td>";  
                    echo "<td class='CL'>" . $resp->getRspComidaExtranjera() . "</td>";  
                        
                        
                        
                       echo "<td><a href='update_persona.php?ID=". $c->getIdPersona() ."&NM=". $c->getNombre() ."&AP=". $c->getApellido() ."&EM=". $c->getEmail() ."&US=". $c->getUsuario() ."&PS=". $c->getClave() ."'><button>Editar</button></a></td>";

                    echo "<td><a href='delete_persona.php?ID=". $c->getIdPersona() ."'><button>Eliminar</button></a></td>";
                    echo "</tr>"; 



                }

                ?>

            </table>
    </div>
          
   
</body>
</html>