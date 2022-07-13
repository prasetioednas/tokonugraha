<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_satuan extends CI_Model {

	public function getdata($key){
		$this->db->where('id_satuan',$key);
		$hasil = $this->db->get('satuan');
		return $this->db->get('satuan');
	}
	function update($id_satuan)
	{
		$this->db->where('id_satuan',$id_satuan);
		return $this->db->get('satuan');
	}
	public function hasil()
	{
		return $this->db->get('satuan');
	}
}