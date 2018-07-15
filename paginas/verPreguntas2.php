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
    
    <div class="titulo"><h1>Lista de Respuestas</h1></div>
   <div class="centrar2">
     <table id="customers">
                <tr>    
                    <th class='IP'>ID</th>
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
                      print_r ($c);
                    echo "<tr>";
                    echo "<td class='IP'>" . $c->getIdUser(). "</td>";
                    echo "<td class='NO'>" . $c->getUsuario() . "</td>";             
                    echo "<td class='AP'>" . $c->getRspPreferencia() . "</td>";   
                    echo "<td class='EM'>" . $c->getRspDesayunoSalado() . "</td>";   
                    echo "<td class='US'>" . $c->getRspDesayunoDulce() . "</td>";
                    echo "<td class='CL'>" . $c->getRspAlmuerzo() . "</td>";
                        echo "<td class='CL'>" . $c->getRspAlmuerzo() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspCena() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspComidaTipica() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspCarnes() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspPostres() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspSaboresDulces() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspBebida() . "</td>";  
                        echo "<td class='CL'>" . $c->getRspComidaExtranjera() . "</td>";  
                        
                        

                }

                ?>

            </table>
    </div>
          
   
</body>
</html>