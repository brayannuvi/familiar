<?php
include("realizar_consulta.php");

$nombreUsuario=$_POST['txtNombreUsuario'];
$contrasenaUsuario=$_POST['txtContrasenaUsuario'];
$pNombre=$_POST['txtPNombre'];
$sNombre=$_POST['txtSNombre'];
$pApellido=$_POST['txtPApellido'];
$sApellido=$_POST['txtSApellido'];
$tipoIdentificacion = $_POST['txtTipoIdentificacion'];
$numeroIdentificacion=$_POST['txtNumeroIdentificacion'];
$edad = $_POST['txtEdad'];

$consulta = "UPDATE `usuario` SET `contrasena_de_login` = '$contrasenaUsuario', `primer_nombre` = '$pNombre', `segundo_nombre` = '$sNombre', `primer_apellido` = '$pApellido', `segundo_apellido` = '$sApellido', `tipo_de_identificacion` = '$tipoIdentificacion', `numero_de_identificacion` = '$numeroIdentificacion', `edad` = '$edad' WHERE `usuario`.`usuario_de_login` = '$nombreUsuario'";
consultaSinRetorno($consulta);
header("location:../informacionPersonal.php?u=$nombreUsuario");

?>