<?php
    $hostname='localhost';
    $database='proyectdb';
    $username='arturo2';
    $password='182180';

    $conexion= new mysqli($hostname,$username,$password,$database);


    if($conexion->connect_errno){
        echo "No se pudo conectar con el servidor";
    }
   

?>