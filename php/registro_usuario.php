<?php
include 'conexion_.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//PARA ENCRIPTAR CONTRASEÑA

$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES('$nombre_completo', '$correo','$usuario','$contrasena')";

//VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS
        
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
        alert("*ERROR El correo ya existe");
        window.location = "../index.php";
    </script>';
    exit();

}

//VERIFICAR QUE EL NOMBRE DE USUARIO NO SE REPITA EN LA BASE DE DATOS

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
        alert("*ERROR El usuario ya existe");
        window.location = "../index.php";
    </script>';
    exit();
    
}

////////////////////////////////////////////////////////////////////////////////////////////////////////

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script> alert("Usuario alamacenado existosamente"); window.location = "../index.php"; </script>';
}else{
    echo '<script> alert("Intentalo de nuevo, usuario no almacenado"); window.location = "../index.php"; </script>';
}

mysqli_close($conexion);

?>