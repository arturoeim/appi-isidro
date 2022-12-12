<?php
include 'conexion.php';
$DES_DEPARTAMENTO=$_GET['DES_DEPARTAMENTO'];

$sentencia="SELECT * FROM JEFATURAS WHERE DES_DEPARTAMENTO='$DES_DEPARTAMENTO'";
$resultado = $conexion ->query($sentencia);

while($fila = $resultado->fetch_array()){
    $usuario[] = array_map('utf8_encode',$fila);
}

echo json_encode($usuario);
$resultado->close();
?>
