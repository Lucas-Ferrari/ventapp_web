<?php
class formasDePago extends Model{


		public function getAll(){
		$this->db->query("select * from formasDePago");
		return $this->db->fetchAll();
	
	}
}
?>