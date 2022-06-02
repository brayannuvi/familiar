<?php

include('realizar_consulta.php');

$usuario=$_POST['txtUsuario'];
$contrasena=$_POST['txtContrasena'];


$consulta = "SELECT* FROM usuario where usuario_de_login = '$usuario' and contrasena_de_login ='$contrasena' ";
$resultado= consultaRetorno($consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
    header("location:../inicio.php?u=$usuario");

}else{ 
    header("location:../index.html?v=1");
}


?>