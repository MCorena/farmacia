<?php
include('conexionPub');
$conexion=mysqli_connect($host,$user,$pass,$base);
if ($conexion) 
{
    echo "Conexion Exitosa";
}else{
    echo "Fallo en la conexion";
}
?>