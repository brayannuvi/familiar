function validarLogin(argument) {
  const valores = window.location.search;
  const urlParams = new URLSearchParams(valores);
  let valor = urlParams.get('v');
  if (valor == 1) 
  {
  	alert("Usuario o contraseña incorrecto");
  }
}

function redireccionar(pagina)
{
	window.location.href = pagina;
}
function cerrarSesion() {
	sessionStorage.clear();
	window.location.href = "index.html";
}

function crearSession() {
	const url = window.location.search;
	const urlParams = new URLSearchParams(url);
	let usuario = urlParams.get('u');
	if (usuario) {
		sessionStorage.setItem('usuario',usuario);
	}
}

function validarSession(){
	if (!sessionStorage.getItem('usuario')) {
		redireccionar("index.html");
	}	
}

function cargarUsuario(campoUsuario) {
	const valores = window.location.search;
	const urlParams = new URLSearchParams(valores);
	var usuario = urlParams.get('u');
	if (usuario) {
		campoUsuario.value = usuario;
	}
}
function setTIdentificador(tIdent,sTIdent) {
	const tIdentificador = document.getElementById(tIdent).value;
 	document.getElementById(sTIdent).value = tIdentificador;
 }