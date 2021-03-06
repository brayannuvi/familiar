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
	$usuario=$_GET['u'];
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
	    	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow mb-2-left" viewBox="0 0 16 16">
			  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
			</svg>
		</button>
	    <button class="btn btn-outline-secondary" type="button" onclick="cerrarSesion();">Cerrar sesión</button>
	  </form>
	</nav>
	<form action="bd/registroFamiliar.php" method="post">
		<input class="form-control" type="hidden" name="txtNombreUsuario" id="txtNombreUsuario">
		<div class="row mb-2">
			<div class="col-md-4">
				<label>Parentesco</label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="txtParentesco" id="txtParentesco">
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-4">
				<label>Primer nombre</label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="txtPNombre" id="txtPNombre">
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-4">
				<label>Segundo nombre</label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="txtSNombre" id="txtSNombre">
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-4">
				<label>Primer Apellido</label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="txtPApellido" id="txtSApellido">
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-4">
				<label>Segundo apellido</label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="txtSApellido" id="txtSApellido">
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-4">
				<label>Tipo de identificacion</label>
			</div>
			<div class="col-md-8">
				<select class="form-select" name="txtTipoIdentificacion" id="txtTipoIdentificacion">
					<option value="" selected>Seleccione</option>
				 	<option value="Cédula de ciudadania">Cédula de ciudadania</option>
					<option value="Cédula de extranjeria">Cédula de extranjeria</option>
					<option value="Pasaporte">Pasaporte</option>
					<option value="Nit">Nit</option>
					<option value="Tarjeta de identidad">Tarjeta de identidad</option>
					<option value="Registro civil de nacimiento">Registro civil de nacimiento</option>
					<option value="Número de oficio externo">Número de oficio externo</option>
					<option value="DNI - Documento nacional de identidad">DNI - Documento nacional de identidad</option>
					<option value="PEP - Permiso especial de permanencia">PEP - Permiso especial de permanencia</option>
				</select>
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-4">
				<label>Número de identificación</label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="txtNumeroIdentificacion" id="txtNumeroIdentificacion">
			</div>
		</div>
		<div class="row mb-2">
			<div class="col-md-4">
				<label>Edad</label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="number" name="txtEdad" id="txtEdad">
			</div>
		</div>
		<input type="submit" name="" class="btn btn-outline-secondary">
	</form>
</div>
</body>
<script type="text/javascript">
	cargarUsuario(txtNombreUsuario);
</script>
</html>