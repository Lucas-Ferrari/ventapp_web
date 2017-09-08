<?php

class 	Producto extends Model {
	
	public function getAll(){
		$this->db->query("select * from producto");
		return $this->db->fetchAll();
	}

	public function getForIndex(){
		$this->db->query("SELECT p.codigoProducto , p.descripcion , s.cantidad , s.puntoReposicion , pv.razonSocial
						  FROM stock s , producto p 
						  join proveedor pv on pv.codigoProveedor = p.codigoProveedor
						  WHERE s.codigoProducto = p.codigoProducto
						  LIMIT 15;
						  ");
		return$this->db->fetchAll();
	}
/*  AND ( s.cantidad - s.puntoReposicion) < ((s.puntoReposicion*10)/100) */

}

?>