<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript" src="javascript/scripts.js"></script>
	<script type="text/javascript">
		crearSession();
		validarSession();
	</script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php
	$usuario=$_GET['u'];
	if (!$usuario) {
		header("location:index.html");
	}
	?>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-light bg-light my-4">
		  <form class="container-fluid justify-content-end">
		    <input class="btn btn-outline-secondary" type="button" onclick="cerrarSesion();" value="Cerrar sesión"></input>
		  </form>
		</nav>
		<div class="row " style="height: 400px;">
			<div class="col-md-6">
				<?php
					echo "<button onclick='redireccionar(".'"'."registroFamiliares.php?u=$usuario".'"'.");'><h2>Agregar familiar</h2></button>";
				?>
			</div>
			<div class="col-md-6" >
				<?php
					echo "<button onclick='redireccionar(".'"'."listaFamiliares.php?u=$usuario".'"'.");'><h2>Ver familiares</h2></button>";
				?>
			</div>
		</div>
		<div class="row" style="height: 400px;">
			<div class="col-md-12" >
				<?php
					echo "<button onclick='redireccionar(".'"'."informacionPersonal.php?u=$usuario".'"'.");'><h2>Ver mi información personal</h2></button>";
				?>
				
			</div>
		</div>
		
		
	</div>
</body>
</html>