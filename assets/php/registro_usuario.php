<?php
include 'conexion_.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES('$nombre_completo', '$correo','$usuario','$contrasena')";

$ejecutar = mysql_querry($conexion, $query);

if ($ejecutar) {
    echo '<script> alert("Usuario alamacenado existosamente");window.location = "../index.php";</script>';
}else{
    echo '<script> alert("Intentalo de nuevo, usuario no almacenado");window.location = "../index.php";</script>';
}

mysql_close($conexion);

?>