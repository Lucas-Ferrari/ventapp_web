<?php
// ./ventapp_web_desa/controllers/pedidos/nuevoPedido.php
	require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php' ;
	require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Pedidos.php' ;
	require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Clientes.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Empleados.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/formasDePago.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/nuevoPedido.php' ;
	
	$c = new Cliente;
	$cl = $c->getAll();

	$e = new Empleado;
	$em = $e->getAll();

	$f = new formasDePago;
	$fp = $f->getAll();


	$v = new nuevoPedido;
	$v->clientes = $cl;
	$v->empleados = $em;
	$v->fPago = $fp;
	$v->render();
?>