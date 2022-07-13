<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {
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
        $data['title'] = "Jenis Barang | Toko Nugraha";
        $data['judul'] = "Jenis Barang";
		$data['isi'] =$this->db->get('jenis');
        $data['content'] = "jenisbarang/content";
		$data['namanya'] = $this->session->nama;
		$this->load->view('dashboard',$data);
	}
	public function edit_satuan()
	{
        $data['title'] = "Jenis Barang | Toko Nugraha";
        $data['judul'] = "Jenis Barang";
		$data['isi'] =$this->db->get('sajenistuan');
		$data['namanya'] = $this->session->nama;
        $data['content'] = "jenisbarang/edit";
		$this->load->view('dashboard',$data);
	}

	public function simpan_data()
	{
		$nama_jenis = $this->input->post('nama_jenis');

		$data = array(
			'nama_jenis' => $nama_jenis
		);
	 $this->db->insert('jenis', $data);
	redirect('jenis','refresh');
	}

	public function hapus_data()
	{
		$id_jenis = $this->uri->segment(3);
		$this->db->where('id_jenis', $id_jenis);
		$this->db->delete('jenis');
		redirect('jenis');
	}

	public function update()
	{
		$id_jenis = $this->uri->segment(3);
		$data['get'] = $this->model_jenis->update($id_jenis)->result();
		$this->load->view('jenisbarang/edit',$data);
	}
	public function action_update()
	{
		$id_jenis = $this->input->post('id_jenis');
		$nama_jenis = $this->input->post('nama_jenis');

		$data = array(
			'id_jenis' => $id_jenis,
			'nama_jenis' => $nama_jenis
		);
		$this->db->where('id_jenis',$id_jenis);
		$this->db->update('jenis',$data);
		redirect('jenis','refresh');
	}
}
