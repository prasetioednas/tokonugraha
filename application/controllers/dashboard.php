<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct(){
		parent::__construct();
		if($this->session->userdata('username') == null){
			
			echo '<script>
			alert("Silahkan Login Terlebih Dahulu!");
			window.location.href ="'.base_url().'";
			</script>';
		}
	}
	public function index()
	{
        $data['title'] = "Dashboard | Toko Nugraha";
        $data['judul'] = "Dashboard";
		$data['hasil'] = $this->model_supplier->hasil()->num_rows();
		$data['hasil1'] = $this->model_databarang->hasil()->num_rows();
        $data['stok'] = $this->model_databarang->sum('barang', 'stok');
        $data['user'] = $this->model_login->hasil()->num_rows();
        $data['content']= "home/content";
		$data['isi'] =$this->db->get('user');
		$data['namanya'] = $this->session->nama;
		// var_dump($data);
		// die();
		$this->load->view('dashboard',$data);
	}
}
