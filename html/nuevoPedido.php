<!DOCTYPE html>
<html>
<head>
	<title>. : VENTAPP - HOME : .</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/normalize.css">
	
	<SCRIPT language="javascript">
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			element1.name="chkbox[]";
			element1.setAttribute('class','cbProd');
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			var element2 = document.createElement("input");
			element2.type = "list";
			element2.setAttribute('list','listaProd');
			element2.setAttribute('class','listaProd');
			cell2.appendChild(element2);

			var cell3 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.type = "number";
			element2.name = "cant"+(rowCount);
			cell3.appendChild(element2);

		//	var cell4 = row.insertCell(3);

		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}

	</SCRIPT>
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
		<fieldset>	<legend>Datos del pedido:</legend>
			<label for="Cliente">Cliente: </label>
			<input name="idCliente" type="text" list="clientes" class="inps">
			<datalist id="clientes">
				<?php 
					foreach($this->clientes as $cl){
						echo "<option value='".$cl['codCliente']."'>".$cl['nombreCliente']."</option>";
					}
				?>
			</datalist>

			<label for="Vendedor">Vendedor: </label>
			<input name="idEmpleado" type="list" class="inps" list="empleados"></input>
			<datalist id="empleados">
				<?php foreach($this->empleados as $em) 
					echo "<option value='".$em['codigoEmpleado']."'>".$em['nombreEmpleado']."</option>";
				?>
			</datalist>
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
		</fieldset>	
			<br /><br />
			<input type="button" value="Agregar producto" onclick="addRow('tProductos')" />
			<input type="button" value="Eliminar producto" onclick="deleteRow('tProductos')"  />
			<table id="tProductos" border="2">
				<tr>
					<th></th>
					<th>Producto</th>
					<th>Cantidad</th>
				</tr>
				<tr>
					<td class="tdProd"><input class="cbProd" type="checkbox"></input></td>
					<td ><input type="text" list="listaProd" class="listaProd" /></td>
					<td ><input /></td>
					
				</tr>
			</table>

		<datalist id="listaProd">
			<option value="1">as</option>

		</datalist>
		<button type="submit">Enviar</button>
		</form>

		<form action="verPedido">
			<input type="search" name="id">
		</form>
		<a href="nuevoPedido" class="btnNuevoPedido" >+</a>
	</section>
</body>
</html>