<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion = mysqli_connect("localhost", "root", "","ropa");
$consulta="SELECT * FROM usuarios where usuario='$usuario' and contrasena='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:principal.php");
}else{
    $mensaje = "Usuario o contraseña incorrectos";
    include("index.php");
?>
    <h1 class="bad"><?php echo $mensaje; ?></h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion); 