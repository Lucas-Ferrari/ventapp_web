<?php

// ../ventapp_web_desa/models/Clientes.php

Class Cliente extends Model {

	function getAll(){
		$this->db->query("SELECT * FROM cliente");
		return $this->db->fetchAll();
	}

	function darAlta($tipoGen , $dni , $codVerif , $nombre , $apellido , $direccion , $telefono , $email , $localidad , $codigoLista, $LP ) {
		// VALIDACION -- isset van en el controlador.  inyección de dependencias para validaCodigoLista
		$nombre = substr($nombre, 0 , 20);
		$nombre = $this->db->escape($nombre);
		$apellido = substr($apellido , 0 , 20);
		$apellido = $this->db->escape($apellido);
		//Acá se usa la inyección de dependencias	
		if($LP->validaCodigoLista($codigoLista)) throw new Exception("Error Processing Request", 1);		

		// QUERY
		if(! $this->db->query("INSERT INTO cliente VALUES(null,'$tipoGen','$dni','$codVerif','$nombre','$apellido','$direccion','$telefono','$email','$localidad','$codigoLista')") ){
			return $this->db->lastID();
		}
		else return true;
	}

	function getDatos($id){
		// VALIDACION 
		$id = $this->db->escape($id);

		// QUERY
		if ( ! $this->db->query("select cl.codCliente , concat(cl.tipoGeneral ,'-' ,cl.dni ,'-',cl.codVerificador) as CUIL , cl.nombreCliente , cl.apellidoCliente , cl.email , cl.telefono , cl.direccion , cl.localidad , li.descripcion from cliente cl JOIN listaprecios li ON cl.codigoLista=li.codigoLista where cl.codCliente = " . $id)) {
			return $this->db->fetchAll();
		}
		else{
			return false;
		}
	}

}