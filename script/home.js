var palabraBusqueda = document.getElementById("buscaPalabra").value;
var categoriaBusqueda = document.getElementById("comboCategoria").value;
var estadoBusqueda = document.getElementById("comboEstado").value;
var salarioBusqueda = document.getElementById("comboSalario").value;
var diasBusqueda = document.getElementById("comboDias").value;

var RegistroNomUsu = document.getElementById("RegistroUserName").value;
var RegistroPass1 = document.getElementById("RegistroPassword").value;
var RegistroPass2 = document.getElementById("RegistroRepeatPass").value;

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
	var RegistroNomUsu = document.getElementById("RegistroUserName").value;
	var RegistroPass1 = document.getElementById("RegistroPassword").value;
	var RegistroPass2 = document.getElementById("RegistroRepeatPass").value;
	var aviso = document.getElementById("aviso");
	aviso.innerHTML=""
	
	if (
		RegistroNomUsu == 0 && RegistroPass1 == 0 && RegistroPass2 == 0
	   )
	{
		alert("Ingresa al menos un parámetro de registro");
	}

	if (
		RegistroPass1 != RegistroPass2
	   ) 
		{
			alert("Las contraseñas no coinciden");
		}

	if(
		RegistroNomUsu.value.length <= 5
	  )
		{
		alert("Nombre usuario debe tener 6 caracteres como mínimo");
		}
}
