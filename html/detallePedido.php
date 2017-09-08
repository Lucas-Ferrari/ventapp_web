<!DOCTYPE html>
<html>
<head>
	<title>. : VENTAPP - Pedido : .</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/normalize.css">
	<meta charset="UFT-8">
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

	<?php foreach ($this->datos as $datos) { ?>
	
	<h3>Número pedido: <?= $datos['codigoPedido'] ?></h3>

	<label>Cliente: </label>
	<span style="margin-left: 15px;"><?= $datos['codigoCliente']?> </span>
	<br/><br/>

	<label>Empleado: </label>
	<span style="margin-left: 15px;"><?= $datos['codigoEmpleado']?></span>
	<br/><br/>

	<label>Fecha pedido:</label>
	<span style="margin-left: 15px;"><?= $datos['fechaPedido']?></span>
	<label style="margin-left: 50px;">Fecha entrega: </label>
	<span style="margin-left: 15px;"><?= $datos['fechaEntrega']?></span>
	<br/><br/>
	<label>Monto total: $ <?= $datos['montoTotal']?></label>

	<?php } 
	?>

		
		<form action="buscaPedido">
			<input type="search" name="nombre">
		</form>
		<a href="nuevoPedido" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>