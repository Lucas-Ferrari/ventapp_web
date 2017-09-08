<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Pedidos.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/detallePedido.php';

	if (isset($_POST['id'])) {
		$id = $_POST['id'];

		$p = new Pedido;
		$datos = $p->getDatos($id);

		$v = new detallePedido;
		$v->datos = $datos;
		$v->render();
	}
//   select dp.codigoPedido , dp.numeroLinea , pr.descripcion, (dp.cantidad*pr.precioCosto) as subtotal from detallepedido dp JOIN pedido pe on pe.codigoPedido = dp.codigoPedido JOIN producto pr on pr.codigoProducto = dp.codigoProducto where pe.codigoPedido = 1
?>
