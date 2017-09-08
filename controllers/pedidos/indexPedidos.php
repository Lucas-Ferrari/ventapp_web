<?php

	require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php' ;
	require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Pedidos.php' ;
	require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/indexPedidos.php';

	if (!isset($todos)){
		$pedidos = new Pedido;
		$todos = $pedidos->getAll();
	}
	$v = new indexPedido;
	$v->pedidos = $todos;
	$v->render();