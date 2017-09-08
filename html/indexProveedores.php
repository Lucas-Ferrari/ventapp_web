<!--
indexProveedores.php
Listado de proveedores
-->
<!DOCTYPE html>
<html>
<head>
	<title>. : VENTAPP - HOME : .</title>
	<meta charset=UTF-8>
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
		<table>
			<tr>
				<th>ID</th>
				<th>CUIT</th>
				<th>Razón social</th>
				<th>Dirección</th>
				<th>Localidad</th>
				<th>Teléfono</th>
				<th>Email</th>
			</tr>
			<?php foreach($this->proveedores as $proveedor){ 
				echo "<tr align='center' class='lista'>";
				echo "<td>" . $proveedor['codigoProveedor'] ." </td>";
				echo "<td>" . $proveedor['tipoGlobal'] . "-" . $proveedor['nroSoc'] . "-" . $proveedor['codVerificador'] . " </td>";
				echo "<td>" . $proveedor['razonSocial'] ." </td>";
				echo "<td>" . $proveedor['direccion'] ." </td>";
				echo "<td> " . $proveedor['localidad'] . " </td>";
				echo "<td> " . $proveedor['telefono'] . " </td>";
				echo "<td> " . $proveedor['email'] . " </td>";
				echo "</tr>";
			}
			?>
		</table>

		<form action="buscaProd">
			<input type="search" name="nombre">
		</form>
		<a href="nuevoProveedor" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>