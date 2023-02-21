<!DOCTYPE html>
<html>
  <head>
    <title>Registrate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="register.php" method="post">
		<label for="nombre_usuario">Usuario:</label>
		<input type="text" id="nombre_usuario" name="nombre_usuario" required><br><br>

		<label for="contrasena">Contraseña:</label>
		<input type="password" id="contrasena" name="contrasena" required><br><br>
		<input type="submit" value="Registrar">
    <button onclick="location.href='index.php'" type="submit">Regresar</button>
	</form>
  </body>
</html>