<?php

session_start();

if(!isset($_SESSION["usuario"])){
    echo '
    <script>
        alert("*ERROR Inicia sesión");
        window.location = "index.php";
    </script>';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<style>
    .navbar-brand{
        font-style: oblique;
        font-size: 33px;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand">UNIVERSIDAD TECNOLOGICA DEL PONIENTE</a>
            <form  class="d-flex">
                <a style="background-color: red;" href="cerrar_sesion.php" class="btn btn-primary active" aria-current="page">Cerrar sesión</a>
            </form>
        </div>
    </nav>
        <h1>Aprende a usar estos lenguajes de programacion</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
            <br>
            <img src="assets/images/css.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">CSS</h5>
                <p class="card-text">Sus siglas corresponden a “Cascading Style Sheets”, que tiene el siguiente significado: Cascading, que significa que los estilos que aplicamos a los elementos de una página web se propagan a los elementos que contiene, se propagan en cascada.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <br>
            <img src="assets/images/html-5.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">HTML</h5>
                <p class="card-text">El Lenguaje de Marcado de Hipertexto (HTML) es el código que se utiliza para estructurar y desplegar una página web y sus contenidos. Por ejemplo, sus contenidos podrían ser párrafos, una lista con viñetas, o imágenes y tablas de datos.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <br>
            <img src="assets/images/php.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PHP</h5>
                <p class="card-text">PHP es un lenguaje de programación interpretado​ del lado del servidor y de uso general que se adapta especialmente al desarrollo web.​ Fue creado inicialmente por el programador danés-canadiense Rasmus Lerdorf en 1994.​ En la actualidad, la implementación de referencia de PHP es producida por The PHP Group.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
                <br>
                <img src="assets/images/archivo-js.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">JS</h5>
                <p class="card-text">JavaScript es un lenguaje de programación que los desarrolladores utilizan para hacer páginas web interactivas. Desde actualizar fuentes de redes sociales a mostrar animaciones y mapas interactivos, las funciones de JavaScript pueden mejorar la experiencia del usuario de un sitio web.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>