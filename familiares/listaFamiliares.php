<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript" src="javascript/scripts.js"></script>
	<script type="text/javascript">
		validarSession();
	</script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<?php
		include ('bd/realizar_consulta.php');
		$usuario = $_GET['u'];
		if (!$usuario) {
			header("location:index.html");
		}
	?>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-light bg-light my-4">
	  <form class="container-fluid">
	    <button class="btn btn-outline" type="button" onclick="redireccionar('inicio.php?u=<?php echo $usuario; ?>');">
	    	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
			  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
			</svg>
		</button>
	    <button class="btn btn-outline-secondary" type="button" onclick="cerrarSesion();">Cerrar sesión</button>
	  </form>
	</nav>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Parentesco</th>
	      <th scope="col">Nombres</th>
	      <th scope="col">Apellidos</th>
	      <th scope="col">tipo de identificación</th>
	      <th scope="col">número de identificación</th>
	      <th scope="col">Edad</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php
	  		$usuario = $_GET['u'];
	  		$consulta = "select*from familiar where usuario_familiar ='$usuario'";
	        $resultado = consultaRetorno($consulta);
	        if ($resultado) {
	           while($row = mysqli_fetch_array($resultado)){  
	           	 echo "<tr>";
	             echo "<th scope = 'row'>" . htmlspecialchars($row['Parentesco']) . "</th>";
	             echo "<td>" . htmlspecialchars($row['primer_nombre'])." ".htmlspecialchars($row['segundo_nombre']). "</td>";
	             echo "<td>" . htmlspecialchars($row['primer_apellido'])." ".htmlspecialchars($row['segundo_apellido']) . "</td>";
	             echo "<td>" . htmlspecialchars($row['tipo_de_identificacion']) . "</td>";
	             echo "<td>" . htmlspecialchars($row['numero_de_identificacion']) . "</td>";
	             echo "<td>" . htmlspecialchars($row['edad']) . "</td>";
	             echo "</tr>";
	             echo "</tr>";
	           }
	        }
	        else
	        {
	          echo "Sin resultados";
	        }
	  	?>
	  </tbody>
	</table>
</div>
</body>
</html>
</body>
</html>