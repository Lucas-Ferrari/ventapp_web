<?php
// ./ventapp_web_desa/controllers/clientes/detalleCliente.php
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Clientes.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/detalleCliente.php';

	if (isset($_POST['ID'])) {
		$idCli = $_POST['ID'];
		$cliente = new Cliente;

		$datos = $cliente->getDatos($idCli);
		$v = new detalleCliente;
		$v->datosCliente = $datos;
		$v->render();
	}
?>