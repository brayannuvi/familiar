<?php
	include 'conexion.php';

	function consultaRetorno($info){
		$conn = OpenCon();
		$consulta = $info;
		if ($resultado= mysqli_query($conn, $consulta)) {
			
		}
		else
		{
			echo "Error al realizar la consulta";
		}
		CloseCon($conn);
		return $resultado;
	}

	function consultaSinRetorno($info){
		$conn = OpenCon();
		$consulta = $info;
		if (mysqli_query($conn, $consulta)) {
			
		}
		else
		{
			echo "Error al realizar la consulta";
		}
		CloseCon($conn);
	}
?>