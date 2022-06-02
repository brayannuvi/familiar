<?php 
include("realizar_consulta.php");

$nombreUsuario=$_POST['txtNombreUsuario'];
$parentesco=$_POST['txtParentesco'];
$pNombre=$_POST['txtPNombre'];
$sNombre=$_POST['txtSNombre'];
$pApellido=$_POST['txtPApellido'];
$sApellido=$_POST['txtSApellido'];
$tipoIdentificacion = $_POST['txtTipoIdentificacion'];
$numeroIdentificacion=$_POST['txtNumeroIdentificacion'];
$edad = $_POST['txtEdad'];

$consulta = "INSERT INTO `familiar` (`Parentesco`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `tipo_de_identificacion`, `numero_de_identificacion`, `edad`, `usuario_familiar`) VALUES ('$parentesco', '$pNombre', '$sNombre', '$pApellido', '$sApellido', '$tipoIdentificacion', '$numeroIdentificacion', '$edad', '$nombreUsuario')";
consultaSinRetorno($consulta);
header("location:../listaFamiliares.php?u=$nombreUsuario");

?>