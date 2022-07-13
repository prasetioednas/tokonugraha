<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_supplier extends CI_Model {

	public function getdata($key){
		$this->db->where('id_supplier',$key);
		$this->db->get('supplier');
		return $this->db->get('supplier');
	}
	function update($id_supplier)
	{
		$this->db->where('id_supplier',$id_supplier);
		return $this->db->get('supplier');
	}
	public function hasil()
	{
		return $this->db->get('supplier');
	}
}