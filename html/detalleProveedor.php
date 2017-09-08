<!-- 
	detalleProveedor.php
	html del detalle de proveedor, se accede por POST
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
		
		<form action="verProveedor">
			<input type="search" name="nombre">
		</form>
		<a href="nuevoProveedor" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>