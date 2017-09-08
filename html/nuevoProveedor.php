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
		<h3>Nuevo Pedido</h3>

		<form name="datosPedido" class="formNuevoPedido" method="POST" action="procesaNuevoPedido">
			<label for="Cliente">Cliente: </label>
			<select name="idCliente" type="text" list="clientes" class="inps">
				<?php 
					foreach($this->clientes as $cl){
						echo "<option value='".$cl['codCliente']."'>".$cl['nombreCliente']."</option>";
					}
				?>
			</select>

			<label for="Vendedor">Vendedor: </label>
			<select name="idEmpleado" type="datalist" class="inps" list="empleados">
				<?php foreach($this->empleados as $em) 
					echo "<option value='".$em['codigoEmpleado']."'>".$em['nombreEmpleado']."</option>";
				?>
			</select>
			<br /><br/>

			<label for="FechaCreacion">Fecha de pedido: </label>
			<input type="date" name="fechaCreacion"></input>
			
			<label for="FechaEntrega">Fecha de entrega: </label>
			<input type="date" name="fechaEntrega" default="null"></input>
			<br /><br />

			<label for="fdePago">Forma de pago:</label>
			<select name="fPago">
				<?php  
					foreach($this->fPago as $fp){
						echo "<option value='".$fp['idFormaPago']."'>".$fp['descripcionFormaPago']."</option>";		
					}
				?>
			</select>
			<br /><br />

			<button type="submit">Confirmar y agregar productos</button>
		</form>

		<form action="verProveedor">
			<input type="search" name="nombre">
		</form>
		<a href="nuevoProveedor" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>