<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Clientes.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/nuevoCliente.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/ListaPrecios.php';

	if(!isset($_POST['nombre'])){
		$lp = new ListaPrecios;
		$dlp = $lp->getAll();

		$v = new nuevoCliente;
		$v->listas = $dlp;
		$v->render();
	}
	else{
		$tipoGen = $_POST['codGeneral'];
		$dni = $_POST['dni'];
		$codVerif = $_POST['codVerificador'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];
		$localidad = $_POST['localidad'];
		$codigoLista = $_POST['cdl'];

		try {
			$cl = new Cliente;
			$lid = $cl->darAlta($tipoGen,$dni,$codVerif,$nombre,$apellido,$direccion,$telefono,$email,$localidad,$codigoLista, new ListaPrecios);
			header("location: clientes");
		} catch (Exception $e) {
			echo "Ups, something went wrong :( " . $e->getMessage();
		}
	}

?>