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
			Portal empleo 
			</figure>

			<article class="access">
				<form>
					Usuario: 
					<input type="text" id="usuario" placeholder="Ingresa nombre de usuario">
			 		Contraseña: 
			 		<input type="password" id="contra" placeholder="Ingresa la contraseña">
			 		<input type="submit" value="Aceptar" id="botonLogin">
			 	</form>
			</article>
		</header>
		<!------------------------------------------------TERMINA HEADER-------------------------------------------------->
		<section class="midSection">

		<!------------------------------------------------EMPIEZA SECCION DE BUSQUEDA-------------------------------------------------->
		<section class="homeSearch">
			<fieldset class="homeFieldset"align="left">
				<legend class="legends">Buscar</legend>
					<article id="home_palabraB">
						Palabra de busqueda:
							<input type="text" id="buscaPalabra" placeholder="Ingresa nombre de vacante">
					</article>
					<article id="home_categoriaB">
						Categoría:
							<select name="categoria" id="comboCategoria">
			 					<option value="0"> Seleciona Categoria</option>
			 					<option value="cualquiera">-Cualquiera-</option>
								<option value="contabilidad">Contabilidad</option>
								<option value="administracion">Administracion</option>
								<option value="ti">Tecnologias de la informacion</option>
							</select>
					</article>
					<article id="home_estadoB">
						Estado:
							<select name="Estados" id="comboEstado">
				 				<option value="0"> Seleciona Estado</option>
				 				<option value="Cualquiera">-Cualquiera-</option>
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
					<article id="home_salarioB">
						Salario:
							<select name="Salario" id="comboSalario">
				 				<option value="0"> Selecciona Salario </option>
				 				<option value="Cualquiera">Cualquiera</option>
				 				<option value="0A3mil">$0 MXN - $3,000 MXN</option>
								<option value="3milA6mil">$3,000 MXN - $6,000 MXN</option>
								<option value="6milA10mil">$6,000 MXN - $10,000 MXN</option>
								<option value="10milA15mil">$10,000 - $15,000</option>
								<option value="15milAMas">$15,000 - Más</option>
							</select>
					</article>
					<article id="home_diasB">
						Desde hace:
							<select name="diasVacante" id="comboDias">
				 				<option value="0"> Selecciona Tiempo </option>
				 				<option value="Cualquiera">Cualquiera</option>
				 				<option value="1dia">1 día</option>
								<option value="2dias">2 días</option>
								<option value="3dias">3 días</option>
								<option value="4dias">4 días</option>
								<option value="5dias">5 días</option>
								<option value="1semana">1 Semana</option>
								<option value="2semanas">2 Semanas</option>
								<option value="3semana">3 Semana</option>
								<option value="1mes">1 mes</option>
								<option value="2meses">2 meses</option>
								<option value="3meses">3 meses</option>
								<option value="masde3meses">más de 3 meses</option>

							</select>
					</article>
					<article class="home_btnB">
						<input id="btnAceptar" class="home_btn"type="submit" value="Buscar" onclick="validarBusquedaHome()">
					</article>		
			</fieldset>
		</section>
		 <!------------------------------------------------TERMINA SECCION DE BUSQUEDA-------------------------------------------------->

		 <!------------------------------------------------EMPIEZA SECCION DE REGISTRO-------------------------------------------------->
		<section id="homeRegister">
		 	<form align="right">
	   			<fieldset class="homeFieldset" align="right">
      			<legend class="legends">¿Aún no estás registrado?</legend>
      			
      			<article id="home_regUserName">
      					Nombre de usuario: <input id="RegistroUserName" type="text" placeholder="Escribe tu nombre de usuario"/><br />
      			</article>
      			<article  id="home_regPassword">
      					Contraseña: <input id="RegistroPassword" type="password" placeholder="Escribe la contraseña"/><br />
      			</article>
      			<article id="home_regRepeatPass">
      					Repetir contraseña: <input id="RegistroRepeatPass" type="password" placeholder="Repite la contraseña"/><br />
      			</article>
      			<article id="RegistroBtnRegistraArt">
      					<input id="BtnRegistrar" class="home_btn home_btnB" type="submit" value="Registrar" onclick="validarRegistro()">
      			</article>
   	  			</fieldset>
   	  			<p id="aviso"> </p>
   	  		</form>
		</section>
		<!------------------------------------------------TERMINA SECCION DE REGISTRO-------------------------------------------------->
	</section>

		<section id="homeText">
			<article class="homemidtext">
				<p>
					Pagina dedicada a jóvenes estudiantes, recién egresados o solamente gente sin experiencia,
					que quiere la oportunidad de encontrar un empleo. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</p>
			</article>
		</section>
		<!------------------------------------------------EMPIEZA PIE DE PAGINA-------------------------------------------------->
		<footer class="footer">
			<h3>Derechos Reservados Busca Empleo 2015</h3>
		</footer>
	</section >
	</body>
</html>
