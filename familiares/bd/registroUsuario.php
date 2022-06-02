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

$consulta = "INSERT INTO `usuario` (`usuario_de_login`, `contrasena_de_login`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `tipo_de_identificacion`, `numero_de_identificacion`, `edad`) VALUES ('$nombreUsuario', '$contrasenaUsuario', '$pNombre', '$sNombre', '$pApellido', '$sApellido', '$tipoIdentificacion', '$numeroIdentificacion', '$edad')";
consultaSinRetorno($consulta);
header("location:../index.html");

?>