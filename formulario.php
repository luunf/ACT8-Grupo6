<html>
 <head>
  <title>Formulario.php</title>
 </head>
 <body>

     <form name="formCargarDatos" method="POST" action="inicioDeSesion.php">
        
        <label>Nombre de usuario:</label>
        <input type="text" name="usuario" size="30" required />
        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasena" size="30" required/>
        <br><br>

        </br></br>
        <input type="submit" value="Ingresar" />
        </br></br>
        <input type="reset" value="Borrar formulario" />
        </br></br>
    </form>

</body>
</html>
