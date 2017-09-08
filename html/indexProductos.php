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
				<li><a href="productos">Productos</a></li>
				<li><a href="pedidos">Pedidos</a></li>
			</ul>
		</nav>
	</header>
	<section>
		
		<form>
		<table >
			<tr>
				<th>ID Producto</th>
				<th>Descripción</th>
				<th>Stock</th>
				<th>Punto reposición</th>
				<th>Agregar al pedido</th>
			</tr>
		
			<?php 
				foreach ($this->productos as $producto) {
					echo "<tr align='center' class='lista'>";
					echo "<td>" . $producto['codigoProducto'] ." </td>";
					echo "<td>" . $producto['descripcion'] ." </td>";
					echo "<td>" . $producto['cantidad'] ." </td>";
					echo "<td>" . $producto['puntoReposicion'] ." </td>";
					echo "<td> " . $producto['razonSocial'] . " </td>";
					echo "</tr>";
				}


			?>
		</table>
		
		</form>
		<form action="verProveedor">
			<input type="search" name="nombre">
		</form>
		<a href="nuevoProveedor" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>