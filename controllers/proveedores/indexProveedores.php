<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Proveedores.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/indexProveedores.php';

	if(!isset($todos)){
		$prov = new Proveedor;
		$todos = $prov->getAll();
	}
	$v = new indexProveedores;
	$v->proveedores = $todos;
	$v->render();
?>