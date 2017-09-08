<?php

// ../ventapp_web_desa/models/ListaPrecios.php

Class ListaPrecios extends Model {

	public function getAll(){
		$this->db->query("select * from listaprecios");
		return $this->db->fetchAll();
	}
	
	public function validaCodigoLista($codLista){
		if(!ctype_digit($codLista)) return false;
		if($codLista==0) return false;

		$this->db->query("SELECT codigoLista 
						  FROM ListaPrecios
						  WHERE codigoLista = '.$codLista'
						  LIMIT 1
							");
		if($this->db->numRows()==1) return true;
		else return false;
	}


}

?>