<?php
session_start();
  $nombre=$_GET["Nombre"];
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
    <link rel="icon" href="../images/logoPesta%C3%B1a.png">
</head>
<body>
    <div class="barra">  
       <?php  
    echo '<h4>'.$nombre.'</h4>'
            ?>
        <hr> <div class="menu">
           <a href="#">Ver usuarios</a>
        </div>
        
        <div class="salirSesion">
            <a href="../index.php">Salir</a>
        </div>
        <div class="espacioLogo">
            <img src="../images/logoBlanco.png" alt="Logo Blanco LOVEFOOD" class="logoB">
        </div>
    </div>
    
          
    <div class="centrar">
               <br><br><br>
                <h1>CREAR USUARIO</h1>
                 <br>   
                <form class="login" method="post" action="guardarUsuario.php">
                     <br>
        <br> 
                    <label >Nombre </label>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">
                    <br><br>
		    <label >Apellido </label>
                    <input type="text" name="apellido" placeholder="Introduce tu apellido">
                    <br><br>
		    <label >Email </label>
                    <input type="text" name="email" placeholder="Introduce tu email">
                    <br> <br>
		    <label >Usuario </label>
                    <input type="text" name="usuario" placeholder="Introduce tu usuario">
                    <br><br>
		    <label >Clave </label>
                    <input type="text" name="clave" placeholder="Introduce tu clave">
                    <br><br>
                    <button type="submit" class="botonCrear">Crear</button>

                </form>
            </div>
   
</body>
</html>























<html>
<head>
	<meta charset="utf-8">
	<title>Nuevo Usuario </title>
       
</head>
<body>
    
       <div class="container">
        <br>
        
       
       
    <div class="contLogin">
                <h1>CREAR USUARIO</h1>
         <br>  
                 <br>
        <br>  
                <form class="login" method="post" action="save_persona.php">
                     <br>
        <br> 
                    <label >Nombre </label>
                    <input type="text" name="nombre" placeholder="Introduce tu nombre">
                    <br>
		    <label >Apellido </label>
                    <input type="text" name="apellido" placeholder="Introduce tu apellido">
                    <br>
		    <label >Email </label>
                    <input type="text" name="email" placeholder="Introduce tu email">
                    <br>
		    <label >Usuario </label>
                    <input type="text" name="usuario" placeholder="Introduce tu usuario">
                    <br>
		    <label >Clave </label>
                    <input type="text" name="clave" placeholder="Introduce tu clave">
                    <br>
		    <label >Ruc </label>
                    <input type="text" name="ruc" placeholder="Introduce tu ruc">
                    <br>
		
		     
                    
                 
		     
                    <button type="submit">Crear</button>

                </form>
            </div>
               </div>
    
    
 
    </body>
   
</html>
