<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databarang extends CI_Controller {
    function __construct(){
		parent::__construct();
		if($this->session->userdata('username') == null){
			
			echo '<script>
			alert("Silahkan Login Terlebih Dahulu!");
			window.location.href ="'.base_url().'";
			</script>';
			$this->load->library('form_validation');
		}
	}
	public function index()
	{
        $data['title'] = "Data Barang | Toko Nugraha";
        $data['judul'] = "Data Barang";
		$data['jenis1'] = $this->db->get('jenis');
		$data['satuan'] = $this->db->get('satuan');
		$data['barang'] =$this->model_databarang->getBarang();
		$data['namanya'] = $this->session->nama;
		// $data['barang1'] = $this->Admin_model->get('barang', ['id_barang' => $id]);
        $data['content'] = "databarang/content";

		$kode_terakhir = $this->model_databarang->getMax('barang', 'id_barang');
		$kode_tambah = substr($kode_terakhir, -6, 6);
		$kode_tambah++;
		$number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
		$data['id_barang'] = 'B' . $number;
		
		$this->load->view('dashboard',$data);
	}
	public function edit_barang()
	{
        $data['title'] = "Data Barang | Toko Nugraha";
        $data['judul'] = "Data Barang";
		$data['isi'] =$this->db->get('barang');
        $data['content'] = "databarang/edit";
		$data['namanya'] = $this->session->nama;
		$this->load->view('dashboard',$data);
	}

	public function simpan_data()
	{
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		// $stok = $this->input->post('stok');
		$satuan_id = $this->input->post('satuan_id');
		$jenis_id = $this->input->post('jenis_id');

		$data = array(
			'id_barang'  => $id_barang,
			'nama_barang' => $nama_barang,
			// 'stok' => $stok,
			'satuan_id' => $satuan_id,
			'jenis_id' => $jenis_id
		);
	 $this->db->insert('barang', $data);
	redirect('databarang','refresh');
	}

	public function hapus_data()
	{
		$id_barang = $this->uri->segment(3);
		$this->db->where('id_barang',$id_barang);
		$this->db->delete('barang');
		redirect('databarang');
	}

	public function update($getId)
	{
		$id = encode_php_tags($getId);
		$id_barang = $this->uri->segment(3);
		$data['get'] = $this->model_databarang->update($id_barang)->result();
		$data['barang1'] = $this->Admin_model->get('barang', ['id_barang' => $id]);
		$this->load->view( 'databarang/edit',$data);
	}
	public function action_update()
	{
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		// $stok = $this->input->post('stok');
		$satuan_id = $this->input->post('satuan_id');
		$jenis_id = $this->input->post('jenis_id');

		$data = array(
			'nama_barang' => $nama_barang,
			// 'stok' => $stok,
			'satuan_id' => $satuan_id,
			'jenis_id' => $jenis_id
		);
		$this->db->where('id_barang',$id_barang);
		$this->db->update('barang',$data);
		redirect('databarang','refresh');
	}
	public function getstok($getId)
    {
        $id = encode_php_tags($getId);
        $query = $this->model_databarang->cekStok($id);
		echo json_encode($query);
		// output_json($query);
    }

}
