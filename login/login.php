<?php
include '../conexion/conexion.php';
$user = htmlentities($_POST['usuario']);
$password = htmlentities($_POST['contraseña']);

/*$cantidadletras = strlen($user);
$cantidadcontraseña = strlen($password);*/

$sel = $con->query("SELECT * FROM usuario WHERE usuario='$user' and contraseña='$password' ");
$row = mysqli_num_rows($sel);

if ($row==1) {
	header ('Location:../exten/alerta.php?mensaje=CORRECTA CONTRASEÑA &tipo=Bien&estado=success');
} else {
	header ('Location:../exten/alerta.php?mensaje=INCORRECTA CONTRASEÑA &tipo=Mal&estado=error');
}


?>