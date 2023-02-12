<?php

$conexion = mysql_connect(
    "localhost",
    "root", 
    "",
    "login_register_db",
);
    if($conexion){
        echo 'Conectado exitosamente a la Base de datos';
    } else{
        echo 'ERROR';
    }


?>