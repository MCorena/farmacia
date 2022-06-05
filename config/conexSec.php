<?php
include('conexionSec');
$conexion=mysqli_connect($host,$user,$pass,$base);
if ($conexion) 
{
    echo "";
}else{
    echo "Fallo en la conexion";
}
?>