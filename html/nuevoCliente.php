<!DOCTYPE html>
<html>
<head>
	<title>. : VENTAPP - HOME : .</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/normalize.css">
	</head>
<body style="margin: auto; width: 1024px;">
	<header class="header">
		<span class="nombreHeader">VENTAPP</span>
		<nav>
			<ul>
				<li><a href="clientes">Clientes</a></li>
				<li><a href="proveedores">Proveedores</a></li>
				<li><a href="">Productos</a></li>
				<li><a href="pedidos">Pedidos</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<h3>Nuevo Cliente</h3>

		<form name="datosPedido" class="formNuevoPedido" method="POST" action="nuevoCliente">
			<fieldset>
			<legend>Datos Cliente: </legend>
				<label for="nombre">Nombre: </label>
				<input name="nombre" required class="input"></input>

				<label for="apellido" style="margin-left: 20px;">Apellido: </label>
				<input name="apellido" required class="inps"></input>
				<br /><br/>

				<label for="codGeneral">CUIL: </label>
				<input name="codGeneral" type="number" required style="width: 35px; margin-left: 40px;"></input>
				<input name="dni" type="number" required style="width: 100px;"></input>
				<input name="codVerificador" type="number" required style="width: 30px;"></input>
				
				<label for="cdl">Codigo de lista:</label>
				<select name="cdl" >
					<?php foreach ($this->listas as $fila) {
						echo "<option value='".$fila['codigoLista']."'>".$fila['descripcion']."</option>";
					}
					?>
				</select>
				<br /><br />

				<label for="direccion">Direccion: </label>
				<input name="direccion" required style="width: 150px;"></input>

				<label for="localidad" style="margin-left: 30px;">Localidad</label>
				<input name="localidad" required></input>
				<br /> <br />

				<label for="telefono">Teléfono:</label>
				<input name="telefono" type="string" required></input>

				<label for="email">Email: </label>
				<input name="email" type="email" ></input>
				<br /> <br />

				<button type="submit">Crear cliente</button>
			</fieldset>
		</form>

		<form action="verClientes">
			<input type="search" name="nombre">
		</form>
		<a href="nuevoCliente" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>