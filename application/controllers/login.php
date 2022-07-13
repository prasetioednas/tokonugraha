<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = "Login | Toko Nugraha";
		$this->load->view('login', $data);
	}
	public function cekLogin()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek = $this->model_login->cek($username,$password)->result();

		if ($cek != NULL) {
			foreach($cek as $a){
				$data['username'] = $a->username;
				$data['nama'] = $a->nama;
				}
				// session masuk
				$this->session->set_userdata($data);
				echo "<script>
				alert('anda berhasil login sebagai ".$data['nama']."')
				</script>";
				redirect('dashboard','refresh');
			} else{
				echo "<script> 
				alert('Username dan Password salah')</script>";
				redirect('login','refresh');
		}
	}

	function logout() {
		$this->session->sess_destroy();
   //kembali/redirect ke halaman login.php
	   $this->load->view('login','refresh');
   }
}
