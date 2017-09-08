<!--
detalleCliente.php
Lista el detalle de cliente, incluir ultimos 5 pedidos, permitir modificación
-->
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
		<?php foreach ($this->datosCliente as $dc) { ?>
		<form method="POSt" action="modificar">
			<h3>Cliente: <?= $dc['codCliente'] ?></h3>	

			<label for="CUIL">CUIL:</label>
			<span> <?= $dc['CUIL'] ?> </span>
			<br /><br />
			
			<label for="nombre">Nombre: </label>
			<span > <?= $dc['nombreCliente']; ?>  </span>
			
			<label for="apellido"> Apellido </label>
			<span> <?= $dc['apellidoCliente']?> </span>
			<br><br>

			<label for="email"> Email </label>
			<span> <?= $dc['email'] ?> </span>
			
			<label for="telefono">Telefono</label>
			<span> <?= $dc['telefono'] ?> </span>
			<br><br>
			
			<label for="direccion">Direccion</label>
			<span> <?= $dc['direccion'] ?> </span>
			<br><br>

			<label for="localidad">Localidad </label>
			<span> <?= $dc['localidad'] ?> </span>
			
			<label for="listaPrecios">Tipo de lista de precios: </label>
			<span><?= $dc['descripcion'] ?></span>
			<br /> <br />
			<!-- <button type="submit">Modificar cliente</button>-->
		</form>
		<?php } ?>
		

		<form action="buscaCliente">
			<input type="search" name="nombre">
		</form>
		<a href="nuevoCliente" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>