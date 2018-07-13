
<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOVE FOOD</title>
    
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="images/logoPesta%C3%B1a.png">
    <link rel="stylesheet" href="css/estilosIndex.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
   
    <div id="iz">
        
        <div class="form-login">
            
            <form class="login100-form validate-form p-b-33 p-t-5" action="validarLogin.php" method="post">
                <img src="images/logoPesta%C3%B1a.png" alt="Logo corazon LOVEFOOD" id="cora-movil">
                <span class="login100-form-title p-b-41">
					Iniciar Sesión
				</span>
                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="user" placeholder="Usuario">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <input type="submit" name="Submit" value="LOGIN" class="login100-form-btn">
                </div>

            </form>
            
            
        </div>
    </div>
    <div id="de">
        <img src="images/redLF.png" alt="LOVEFOOD" id="img-index">
    </div>
    
</body>
</html>