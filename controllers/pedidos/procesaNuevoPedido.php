<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/fw/ventappfw.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Pedidos.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/nuevoPedido.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/models/Productos.php';
require $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/views/agregarProductos.php';

	if ( $_POST['idCliente'] == 0 || $_POST['idEmpleado'] == 0 || $_POST['fechaCreacion'] == 0 || $_POST['fechaEntrega'] == 0 || $_POST['fPago'] == 0 ){
		echo "faltan datos para crear pedido";
		sleep(15);
		header("location: nuevoPedido");
	}
	else{
		$idC = $_POST['idCliente'];
		$idE = $_POST['idEmpleado'];
		$fCr = $_POST['fechaCreacion'];
		$fEn = $_POST['fechaEntrega'];
		$fPa = $_POST['fPago'];

		if (! (new Pedido)->newPedido($idC,$idE,$fCr,$fEn,$fPa)){
			echo "Algo salió mal, intentalo nuevamente";
			sleep(4);
			header("location: nuevoPedido");
		}
		else{
			//Se creó OK
			
		}
	}

	var_dump($_POST);
?>