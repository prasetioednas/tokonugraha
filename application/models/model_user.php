<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {

	public function getdata($key){
		$this->db->where('id_user',$key);
		$this->db->get('user');
		return $this->db->get('user');
	}
	function update($id_user)
	{
		$this->db->where('id_user',$id_user);
		return $this->db->get('user');
	}
	public function hasil()
	{
		return $this->db->get('user');
	}
}