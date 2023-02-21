<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="login.php" method="post">
      <section class="form-login">
        <h5>Iniciar sesión</h5>
        <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
        <input class="controls" type="password" name="contraseña" value="" placeholder="Contraseña">
        <input class="buttons" type="submit" value="Ingresar">
        <?php if(isset($mensaje)){ ?>
          <p class="error"><?php echo $mensaje; ?></p>
        <?php } ?>
        <p><a href="registrar.php">Registrarse</a></p>

      </section>
    </form>

  </body>
</html>




