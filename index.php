
<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOVE FOOD</title>
    <link rel="stylesheet" href="css/estilosIndex.css">
    <link rel="icon" href="images/logoPesta%C3%B1a.png">
</head>
<body>
    <div id="iz">
        <img src="images/logoPesta%C3%B1a.png" alt="Logo corazon LOVEFOOD" id="cora-movil">
        <div class="form-login">
            <form action="validarLogin.php" method="post">
                <h4>Inicio de Sesión</h4>
                <input type="text" name="user" placeholder="Usuario" id="user">
                <input type="text" name="password" placeholder="Contraseña" id="password">
                <input type="submit" name="Submit" value="LOGIN">
            </form>
        </div>
    </div>
    <div id="de">
        <img src="images/redLF.png" alt="LOVEFOOD" id="img-index">
    </div>
</body>
</html>