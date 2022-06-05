<?php
require('../config/conexSec.php');

if (isset($_POST['usuario']) && isset($_POST['password'])) {
    header("Location: ../html/login.html");
} else {

$varCorr=$_POST['user'];
$vaPass=$_POST['pwd'];


$reg=mysqli_query($conexion,"SELECT CORREO, codRol FROM usuario
    WHERE CORREO='$varCorr' AND PASSWORD='$vaPass'")
    or die("Error al consultar los datos".mysqli_error($conexion));

if($fila=mysqli_fetch_array($reg)){

   switch($fila['codRol']){
         case 1:
            session_start();
            $_SESSION['user']=$fila['CORREO'];
            header('Location: admin.php');
            break;
         case 2:
            session_start();
            $_SESSION['user']=$fila['correo'];
            header('Location: empleado.php');
            break;
        case 3:
                session_start();
                $_SESSION['user']=$fila['correo'];
                header('Location: cliente.php');
                break;
}
}
else{
    echo "Usuario o contraseña incorrectos";}

}
?>