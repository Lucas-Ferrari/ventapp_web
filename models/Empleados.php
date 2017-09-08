<?php

// ../ventapp_web_desa/models/Empleados.php

Class Empleado extends Model {

	function getAll(){
		$this->db->query("SELECT * FROM empleado");
		return $this->db->fetchAll();
	}

	
}