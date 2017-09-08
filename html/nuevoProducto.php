<?php 
//nuevoProducto.php
//Formulario html para crear un nuevo producto
?>
<!DOCTYPE html>
<html>
<head>
	<title>. : VENTAPP - Nuevo producto : .</title>
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
		<span>Nuevo Pedido</span>
		<form class="formNuevoPedido" method="POST" action="procesaNuevoPedido">
			<label for="nCliente">Cliente: </label>
			<input type="text" list="clientes" class="inps"></input>
			<datalist id="clientes">



		
			</datalist>
			<label for="nVendedor">Vendedor: </label>
			<input type="datalist" class="inps"></input>
			<br />
			<label for="nFechaCreacion">Fecha de pedido: </label>
			<input type="date" name="nFechaCreacion"></input>
			<label for="nFechaEntrega">Fecha de entrega: </label>
			<input type="date" name="nFechaEntrega"></input>
			<br />
			
		</form>

	</section>
</body>
</html>