var palabraBusqueda = document.getElementById("buscaPalabra").value;
var categoriaBusqueda = document.getElementById("comboCategoria").value;
var estadoBusqueda = document.getElementById("comboEstado").value;
var salarioBusqueda = document.getElementById("comboSalario").value;
var diasBusqueda = document.getElementById("comboDias").value;

var nombre = document.getElementById("RegistroNombre").value;
var apellidos = document.getElementById("RegistroApellidos").value;
var email = document.getElementById("RegistroEmail").value;

function validarBusquedaHome(){
	var palabraBusqueda = document.getElementById("buscaPalabra").value;
	var categoriaBusqueda = document.getElementById("comboCategoria").value;
	var estadoBusqueda = document.getElementById("comboEstado").value;
	var salarioBusqueda = document.getElementById("comboSalario").value;
	var diasBusqueda = document.getElementById("comboDias").value;
	
	if (
		palabraBusqueda == 0 && categoriaBusqueda == 0 &&estadoBusqueda == 0 &&
		salarioBusqueda == 0 && diasBusqueda == 0
		)
	{
		alert("Ingresa al menos un parámetro de busqueda");
	}
}

function validarRegistro(){
	var nombre = document.getElementById("RegistroNombre").value;
	var apellidos = document.getElementById("RegistroApellidos").value;
	var email = document.getElementById("RegistroEmail").value;
	
	if (
		nombre == 0 && apellidos == 0 && email == 0
		)
	{
		alert("Ingresa al menos un parámetro de registro");
	}
}