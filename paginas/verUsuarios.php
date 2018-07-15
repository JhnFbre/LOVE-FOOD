<?php
session_start();
$nombre = $_SESSION['nombre'];
?>
<?php
include_once("modelo/persona/PersonaCollector.php");

$PersonaCollectorObj = new PersonaCollector();
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
    
    <div class="titulo"><h1>Lista de Usuarios</h1></div>
   <div class="centrar2">
     <table id="customers">
                <tr>    
                    <th class='IP'>ID</th>
                    <th class='NO' >NOMBRE</th>
                    <th class='AP'>APELLIDO</th>
                    <th class='EM'>CONTACTO</th>
                    <th class='US'>USUARIO</th>
                     <th class='CL'>CLAVE</th>
                   
                </tr>
                <?php
                    foreach ($PersonaCollectorObj->showPersonas() as $c){
                    // print_r ($c);
                        echo "<tr>";
                    echo "<td class='IP'>" . $c->getIdPersona() . "</td>";
                    echo "<td class='NO'>" . $c->getNombre() . "</td>";             
                    echo "<td class='AP'>" . $c->getApellido() . "</td>";   
                    echo "<td class='EM'>" . $c->getContacto() . "</td>";   
                    echo "<td class='US'>" . $c->getUsuario() . "</td>";
                    echo "<td class='CL'>" . $c->getClave() . "</td>";  
                        
                        
                        
                       /* echo "<td><a href='update_persona.php?ID=". $c->getIdPersona() ."&NM=". $c->getNombre() ."&AP=". $c->getApellido() ."&EM=". $c->getEmail() ."&US=". $c->getUsuario() ."&PS=". $c->getClave() ."'><button>Editar</button></a></td>";

                    echo "<td><a href='delete_persona.php?ID=". $c->getIdPersona() ."'><button>Eliminar</button></a></td>";
                    echo "</tr>"; */



                }

                ?>

            </table>
    </div>
          
   
</body>
</html>