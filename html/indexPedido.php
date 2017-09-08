<?php 
// indexPedido.php
// Lista los últimos 20 pedidos ingresados al sistema , tiene que tener los llamados a cancelar pedido y modificar pedido
?>
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
				<th>Cliente</th>
				<th>Empleado</th>
				<th>Fecha Pedido</th>
				<th>Fecha entrega</th>
				<th>Estado</th>
			</tr>
		
			<?php 
				foreach ($this->pedidos as $pedido) {
					echo "<tr align='center' class='lista'>";
					echo "<td>" . $pedido['codigoPedido'] ." </td>";
					echo "<td>" . $pedido['nombreCliente'] ." </td>";
					echo "<td>" . $pedido['nombreEmpleado'] ." </td>";
					echo "<td>" . $pedido['fechaPedido'] ." </td>";
					echo "<td>" . $pedido['fechaEntrega'] ." </td>";
					echo "<td> " . $pedido['estado'] . " </td>";
					echo "</tr>";
				}


			?>
		</table>
		
		</form>
		<form action="verPedido" method="POST">
			<input type="search" name="id">
		</form>
		<a href="nuevoPedido" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>