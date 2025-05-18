<html>
 <head>
  <title>inicioDeSesion.php</title>
 </head>
 <body>
	
	<form name="Inicio de sesión" >
 
	<label>
        <?php
		    $usuario = $_POST["usuario"];
            $contrasena = $_POST["contrasena"];

            if ($usuario === "jperez" && $contrasena === "9999") {
                echo "Bienvenido al sistema, Juan Pérez.";
            } else {
                echo "Usuario y/o Contraseña incorrectos. Intentar nuevamente.";
            }
        ?>	
	</label> 	
	
	</form> 
	
 </body>
</html>
