<!DOCTYPE html>
<html>
	<head>
		<title>Busca empleo</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="script/home.js"> </script>
	</head>

	<body>
	<section id="container">
		<!------------------------------------------------EMPIEZA HEADER-------------------------------------------------->
		<header>
			<figure id="logo">
			<img src="http://www.mogiempregos.com.br/wp-content/uploads/2014/09/318-62782.png" width="50" height="50">
			Perfil de usuario
			</figure>

			<article class="Bienvenido">
				<form>
					Bienvenido: [NombredeUsuario]
			 	</form>
			</article>
		</header>
		<!------------------------------------------------TERMINA HEADER-------------------------------------------------->
		<section class="midSection">

		<!------------------------------------------------EMPIEZA SECCION DATOS PERSONALES-------------------------------------------------->

		<section id="datosPersonales">
			<form id="FormPerfilUsuario" align="left">
	   			<fieldset class="PerfilUsuario" align="right">
      			<legend class="legends">  Datos Personales  </legend>
      			
      			<article id="PerfilNombresArt">
      					Nombres: <input id="PerfilNombres" type="text" placeholder="Escribe tu(s) nombre(s)"/><br/>
      			</article>
      			<article  id="PerfilApellidosArt">
      					Apellidos: <input id="PerfilApellidos" type="text" placeholder="Escribe tus apellidos"/><br/>
      			</article>
      			<article id="PerfilCorreoArt">
      					Correo: <input id="PerfilCorreo" type="text" placeholder="Correo vigente"/><br/>
      			</article>
      			<article id="PerfilGeneroArt">
      				Género:
      				<select name="PerfilGenero" id="ComboGenero">
      					<option value="0" >--Selecciona--</option>
      					<option value="Femenino">Femenino</option>
      					<option value="Masculino">Masculino</option>
      				</select>
      			</article>
      			<article id="PerfilFechaNacimientoArt">
      				Fecha de nacimiento: <input id="PerfilFechaNacimiento" type="text" placeholder="DD/MM/AAAA">
      			</article>
      			<article id="PerfilEstadoArt">
						Estado:
							<select name="Estados" id="PerfilcomboEstado">
				 				<option value="0"> Seleciona Estado</option>
								<option value="Aguascalientes">Aguascalientes</option>
								<option value="Baja California">Baja California</option>
								<option value="Baja California Sur">Baja California Sur</option>
								<option value="Campeche">Campeche</option>
								<option value="Chiapas">Chiapas</option>
								<option value="Chihuahua">Chihuahua</option>
								<option value="Coahuila">Coahuila</option>
								<option value="Colima">Colima</option>
								<option value="Distrito Federal">Distrito Federal</option>
								<option value="Durango">Durango</option>
								<option value="Estado de México">Estado de México</option>
								<option value="Guanajuato">Guanajuato</option>
								<option value="Guerrero">Guerrero</option>
								<option value="Hidalgo">Hidalgo</option>
								<option value="Jalisco">Jalisco</option>
								<option value="Michoacán">Michoacán</option>
								<option value="Morelos">Morelos</option>
								<option value="Nayarit">Nayarit</option>
								<option value="Nuevo León">Nuevo León</option>
								<option value="Oaxaca">Oaxaca</option>
								<option value="Puebla">Puebla</option>
								<option value="Querétaro">Querétaro</option>
								<option value="Quintana Roo">Quintana Roo</option>
								<option value="San Luis Potosí">San Luis Potosí</option>
								<option value="Sinaloa">Sinaloa</option>
								<option value="Sonora">Sonora</option>
								<option value="Tabasco">Tabasco</option>
								<option value="Tamaulipas">Tamaulipas</option>
								<option value="Tlaxcala">Tlaxcala</option>
								<option value="Veracruz">Veracruz</option>
								<option value="Yucatán">Yucatán</option>
								<option value="Zacatecas">Zacatecas</option>
							</select>
						
				</article>

				<article id="PerfilCiudadArt">
      				Ciudad: <input id="PerfilCiudad" type="text" placeholder="Ciudad donde vives">
      			</article>

				<article id="PerfilCodigoPostalArt">
      				Código Postal: <input id="PerfilCodigoPostal" type="text" placeholder="Escribe tu código postal">
      			</article>

      			<article id="PerfilTeloCelArt">
      				Teléfono o Celular: <input id="PerfilTeloCel" type="text" placeholder="Escribe tu teléfono o celular">
      			</article>

      			<article id="PerfilBtnArt">
      					<input id="PerfilBtnGuardar" class="home_btn home_btnB" type="submit" value="Guardar datos" onclick="">
      			</article>
   	  		</fieldset>
   	  		</form>
		</section>

		<!------------------------------------------------TERMINA SECCION DATOS PERSONALES-------------------------------------------------->

		<!------------------------------------------------EMPIEZA PIE DE PAGINA-------------------------------------------------->
		<footer class="footer">
			<h3>Derechos Reservados Busca Empleo 2015</h3>
		</footer>
		<!------------------------------------------------TERMINA PIE DE PAGINA-------------------------------------------------->
	</body>
</html>
