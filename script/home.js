var palabraBusqueda = document.getElementById("buscaPalabra").value;
var categoriaBusqueda = document.getElementById("comboCategoria").value;
var estadoBusqueda = document.getElementById("comboEstado").value;
var salarioBusqueda = document.getElementById("comboSalario").value;
var diasBusqueda = document.getElementById("comboDias").value;

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
		alert("Ingresa al menos un parametro de busqueda");
	}
}