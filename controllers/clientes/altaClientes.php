<?php

// ../ventapp_web_desa/controllers/altaClientes.php

require '../fw/ventappfw.php';
require '../models/Clientes.php';
require '../models/ListaPrecios.php';
require '../views/AltaClienteOK.php';
require '../views/FormAltaCliente.php';

if (isset($_POST['nombre'])) {
	//Validación de campos no nulos en la tabla antes de llamar a la función que hace insert
	if(!isset($_POST['tipoGen'])) throw new Exception("Error Processing Request", 1);
	if(!isset($_POST['dni'])) throw new Exception("Error Processing Request", 2);
	if(!isset($_POST['codVerif'])) throw new Exception("Error Processing Request", 3);
	if(!isset($_POST['nombre'])) throw new Exception("Error Processing Request", 4);
	if(!isset($_POST['apellido'])) throw new Exception("Error Processing Request", 5);
	if(!isset($_POST['direccion'])) throw new Exception("Error Processing Request", 6);
	if(!isset($_POST['telefono'])) throw new Exception("Error Processing Request", 7);
	if(!isset($_POST['email'])) throw new Exception("Error Processing Request",8);
	if(!isset($_POST['localidad'])) throw new Exception("Error Processing Request", 9);
	if(!isset($_POST['codigoLista'])) throw new Exception("Error Processing Request", 10);

	// Se le injecta ListaPrecios para llamar a la función verificarCodigoLista
	if( (new Clientes)->darAlta($tipoGen,$dni,$codVerif,$nombre,$apellido,$direccion,$telefono,$email,$localidad,$codigoLista, new ListaPrecios) ) { 
		// Se creó OK
		$pView = new AltaClienteOK;
		$pView->render();
	}	
	else {
		$pView = new FormAltaCliente;
		$pView->render();
	}
}



throw new Exception("Error Processing Request", 1);

?>