<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {
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
        $data['title'] = "Satuan Barang | Toko Nugraha";
        $data['judul'] = "Satuan Barang";
		$data['isi'] =$this->db->get('satuan');
        $data['content'] = "satuanbarang/content";
		$data['namanya'] = $this->session->nama;
		$this->load->view('dashboard',$data);
	}
	public function edit_satuan()
	{
        $data['title'] = "Satuan Barang | Toko Nugraha";
        $data['judul'] = "Satuan Barang";
		$data['isi'] =$this->db->get('satuan');
        $data['content'] = "satuanbarang/edit";
		$data['namanya'] = $this->session->nama;
		$this->load->view('dashboard',$data);
	}

	public function simpan_data()
	{
		$nama_satuan = $this->input->post('nama_satuan');

		$data = array(
			'nama_satuan' => $nama_satuan
		);
	 $this->db->insert('satuan', $data);
	redirect('satuan','refresh');
	}

	public function hapus_data()
	{
		$id_satuan = $this->uri->segment(3);
		$this->db->where('id_satuan', $id_satuan);
		$this->db->delete('satuan');
		redirect('satuan');
	}

	public function update()
	{
		$id_satuan = $this->uri->segment(3);
		$data['get'] = $this->model_satuan->update($id_satuan)->result();
		$this->load->view('satuanbarang/edit',$data);
	}
	public function action_update()
	{
		$id_satuan = $this->input->post('id_satuan');
		$nama_satuan = $this->input->post('nama_satuan');

		$data = array(
			'id_satuan' => $id_satuan,
			'nama_satuan' => $nama_satuan
		);
		$this->db->where('id_satuan',$id_satuan);
		$this->db->update('satuan',$data);
		redirect('satuan','refresh');
	}
}
