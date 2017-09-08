<?php

class Proveedor extends Model{

	public function getAll(){
		$this->db->query("select * from proveedor");
		return $this->db->fetchAll();
	}
}

?>