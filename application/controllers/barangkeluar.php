<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangkeluar extends CI_Controller {
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
        $data['title'] = "Barang Keluar | Toko Nugraha";
        $data['judul'] = "Barang Keluar";
        $data['content']= "barangkeluar/content";
        $data['barangkeluar'] = $this->model_barangkeluar->getBarangKeluar();
		$data['namanya'] = $this->session->nama;
		$this->load->view('dashboard',$data);
	}
	// public function add()
	// {
    //     $data['title'] = "Barang Keluar | Toko Nugraha";
    //     $data['judul'] = "Barang Keluar";
    //     $data['content']= "barangkeluar/add";
	// 	$data['namanya'] = $this->session->nama;
	// 	$data['supplier'] = $this->Admin_model->get('supplier');
	// 	$data['barang'] = $this->Admin_model->get('barang');

	// 	// Mendapatkan dan men-generate kode transaksi barang masuk
	// 	$kode = 'T-BM-' . date('ymd');
	// 	$kode_terakhir = $this->Admin_model->getMax('barang_masuk', 'id_barang_masuk', $kode);
	// 	$kode_tambah = substr($kode_terakhir, -5, 5);
	// 	$kode_tambah++;
	// 	$number = str_pad($kode_tambah, 5, '0', STR_PAD_LEFT);
	// 	$data['id_barang_masuk'] = $kode . $number;


	// 	$this->load->view('dashboard',$data);
	// }
	// public function simpan_data()
	// {
	// 	$input = $this->input->post(null, true);
    // $insert = $this->model_barangmasuk->insert('barang_masuk', $input);
	// if ($insert) {
	// 	echo "<script>
	// 		alert('Data berhasil di Simpan')
	// 		</script>";
	// 	redirect('barangmasuk');
	// } else {
	// 	echo "<script>
	// 		alert('Data gagal di Simpan', false)
	// 		</script>";
	// 	redirect('barangmasuk/add');
	// }
	// redirect('barangmasuk',$insert);

	// 	$id_barang_masuk = $this->input->post('id_barang_masuk');
	// 	$supplier_id = $this->input->post('supplier_id');
	// 	// $user_id = $this->input->post('user_id');
	// 	$barang_id = $this->input->post('barang_id');
	// 	$jumlah_masuk = $this->input->post('jumlah_masuk');
	// 	$tanggal_masuk = $this->input->post('tanggal_masuk');

	// 	$data = array(
	// 		'id_barang_masuk' => $id_barang_masuk,
	// 		'supplier_id' => $supplier_id,
	// 		// 'user_id' => $user_id,
	// 		'barang_id' => $barang_id,
	// 		'jumlah_masuk' => $jumlah_masuk,
	// 		'tanggal_masuk' => $tanggal_masuk

	// 	);
	//  $this->db->insert('barang_masuk', $data);
	// redirect('barangmasuk','refresh');
	// }
	public function hapus_data()
	{
		$id_barang_masuk = $this->uri->segment(3);
		$this->db->where('id_barang_masuk',$id_barang_masuk);
		$this->db->delete('barang_masuk');
		redirect('barangmasuk');
	}
	public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->model_barangmasuk->delete('barang_masuk', 'id_barang_masuk', $id)) {
			echo "<script>
			alert('Data berhasil dihapus')
			</script>";
        } else {
			echo "<script>
			alert('Data gagal dihapus', false)
			</script>";
        }
        redirect('barangmasuk');
    }
	public function getstok($getId)
    {
        // $id = encode_php_tags($getId); // buat apaan
        $query = $this->model_barangmasuk->cekStok($getId);
		echo json_encode($query);
		// output_json($query);
    }
}
