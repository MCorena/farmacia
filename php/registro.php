<?php
require('../config/conexSec.php');


$varUser=$_POST['nombre'];
$varApell=$_POST['apellido'];
$varCorr=$_POST['correo'];
$varPass=md5($_REQUEST['password']);

$queryinsert= "INSERT INTO usuario (NOMUSER, APELLIDO, CORREO, PASSWORD) VALUES ('$varUser','$varApell','$varCorr','$varPass')";
mysqli_query($conexion,$queryinsert)
or die("Problemas al insertar".mysqli_error($conexion));
echo "Usuario Registrado correctamente"

?>