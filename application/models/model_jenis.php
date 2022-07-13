<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_jenis extends CI_Model {

	public function getdata($key){
		$this->db->where('id_jenis',$key);
		$hasil = $this->db->get('jenis');
		return $this->db->get('jenis');
	}
	function update($id_jenis)
	{
		$this->db->where('id_jenis',$id_jenis);
		return $this->db->get('jenis');
	}
	public function hasil()
	{
		return $this->db->get('jenis');
	}
}