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
				<th>ID</th>
				<th>CUIL</th>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Localidad</th>
				<th>Telefono</th>
				<th>Email</th>
			</tr>
		
			<?php 
				foreach ($this->clientes as $cliente) {
					echo '<tr align="center" class="lista" >';
					echo "<td>" . $cliente['codCliente'] ." </td>";
					echo "<td>" . $cliente['tipoGeneral'] . "-" . $cliente['dni'] . "-" . $cliente['codVerificador'] . " </td>";
					echo "<td>" . $cliente['nombreCliente'] . " " . $cliente['apellidoCliente'] . " </td>";
					echo "<td>" . $cliente['direccion'] ." </td>";
					echo "<td>" . $cliente['localidad'] . "</td> ";
					echo "<td> " . $cliente['telefono'] . " </td>";
					echo "<td> " . $cliente['email'] . " </td>";
					echo "</tr>";
				}
			?>
		</table>
		
		</form>
		<form action="verCliente" method="POST">
			<input type="search" name="ID">
		</form>
		<a href="nuevoCliente" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>

