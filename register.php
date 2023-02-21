<?php
// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $base_de_datos = "ropa";

    $conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

    // Verificar la conexión a la base de datos
    if ($conexion->connect_error) {
        die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
    }

    // Recuperar los datos del formulario de registro
    $nombre_usuario = $_POST["nombre_usuario"];
    $contrasena = $_POST["contrasena"];

    // Verificar si el nombre de usuario ya existe en la base de datos
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$nombre_usuario'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        echo "El nombre de usuario ya está en uso, por favor elige otro.";
    } else {
        // Insertar el nuevo usuario en la base de datos
        $consulta = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$nombre_usuario', '$contrasena')";

        if ($conexion->query($consulta) === TRUE) {
            echo "El usuario ha sido registrado exitosamente.";
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>

