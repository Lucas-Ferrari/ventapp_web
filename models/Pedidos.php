<?php
// ./ventapp_web_desa/models/Productos.php

class Pedido extends Model {
	public $clientes;
	public $empleados;
	public $listaPedidos;
	
	public function getAll(){
		$this->db->query("SELECT pe.codigoPedido , cl.nombreCliente , em.nombreEmpleado , pe.fechaPedido , pe.fechaEntrega ,  pe.estado 			 from pedido pe
						  join cliente cl on pe.codigoCliente = cl.codCliente
						  join empleado em on em.codigoEmpleado = pe.codigoEmpleado");
		return $this->db->fetchAll();
	}

	public function newPedido($idC,$idE,$fCr,$fEn,$fPa){
		$idC = $this->db->escape($idC);
		$idE = $this->db->escape($idE);
		$fCr = $this->db->escape($fCr);
		$fEn = $this->db->escape($fEn);
		$fPa = $this->db->escape($fPa);

		$qry = "INSERT INTO pedido (codigoPedido , codigoCliente , codigoEmpleado , fechaPedido , fechaEntrega , formaDePago , estado) 
				VALUES (null , '.$idC.','.$idE.','.$fCr.','.$fEn.','.$fPa')";

		if ($this->db->query($qry)) {
			return $this->lastID();	
		}
		else { 
			return false; 
		}
	}

	public function getDatos($id){
		$id = $this->db->escape($id);

		$qry = "select * from pedido where codigoPedido = '".$id."'";
		if (!$this->db->query($qry)) {
			return $this->db->fetchAll();
		}
	}

	public function getDetalle($id){
		$id = $this->db->escape($id);

		$qry = "select dp.codigoPedido , dp.numeroLinea , pr.descripcion,  (dp.cantidad*pr.precioCosto) as subtotal
				from detallepedido dp
				JOIN pedido pe on pe.codigoPedido = dp.codigoPedido
				JOIN producto pr on pr.codigoProducto = dp.codigoProducto
				where pe.codigoPedido = '".$id."'";

		if(!$this->db->query($qry)){
			return $this->db->fetchAll();
		}
		else return false;
	}


}//class
?>