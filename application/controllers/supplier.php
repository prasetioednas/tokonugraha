<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
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
        $data['title'] = "Supplier | Toko Nugraha";
        $data['judul'] = "Supplier";
		$data['isi'] =$this->db->get('supplier');
        $data['content'] = "supplier/content";
		$data['namanya'] = $this->session->nama;
		$this->load->view('dashboard',$data);
	}
	public function edit_supplier()
	{
        $data['title'] = "Supplier | Toko Nugraha";
        $data['judul'] = "Supplier";
		$data['isi'] =$this->db->get('supplier');
		$data['namanya'] = $this->session->nama;
        $data['content'] = "supplier/edit";
		$this->load->view('dashboard',$data);
	}

	public function simpan_data()
	{
		$nama_supplier = $this->input->post('nama_supplier');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nama_supplier' => $nama_supplier,
			'no_telp' => $no_telp,
			'alamat' => $alamat
		);
	 $this->db->insert('supplier', $data);
	redirect('supplier','refresh');
	}

	public function hapus_data()
	{
		$id_supplier = $this->uri->segment(3);
		$this->db->where('id_supplier',$id_supplier);
		$this->db->delete('supplier');
		redirect('supplier');
	}

	public function update()
	{
		$id_supplier = $this->uri->segment(3);
		$data['get'] = $this->model_supplier->update($id_supplier)->result();
		$this->load->view('supplier/edit',$data);
	}
	public function action_update()
	{
		$id_supplier = $this->input->post('id_supplier');
		$nama_supplier = $this->input->post('nama_supplier');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');

		$data = array(
			'id_supplier' => $id_supplier,
			'nama_supplier' => $nama_supplier,
			'no_telp' => $no_telp,
			'alamat' => $alamat
		);
		$this->db->where('id_supplier',$id_supplier);
		$this->db->update('supplier',$data);
		redirect('supplier','refresh');
	}
}
