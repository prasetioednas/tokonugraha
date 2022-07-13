<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
        $data['title'] = "User Management | Toko Nugraha";
        $data['judul'] = "User Management";
		$data['isi'] =$this->db->get('user');
        $data['content'] = "user/content";
		$data['namanya'] = $this->session->nama;
		$this->load->view('dashboard',$data);
	}
	public function edit_user()
	{
        $data['title'] = "User Management | Toko Nugraha";
        $data['judul'] = "User Management";
		$data['isi'] =$this->db->get('user');
		$data['namanya'] = $this->session->nama;
        $data['content'] = "user/edit";
		$this->load->view('dashboard',$data);
	}

	public function simpan_data()
	{
        $input = $this->input->post(null, true);
        $input_data = [
            'nama'          => $input['nama'],
            'username'      => $input['username'],
            'email'         => $input['email'],
            'no_telp'       => $input['no_telp'],
            'role'          => $input['role'],
            'password'      => password_hash($input['password'], PASSWORD_DEFAULT),
            'created_at'    => time(),
            'foto'          => 'user.png'
        ];
	 $this->db->insert('user', $input_data);
	redirect('user','refresh');
	}

	public function hapus_data()
	{
		$id_user = $this->uri->segment(3);
		$this->db->where('id_user',$id_user);
		$this->db->delete('user');
		redirect('user');
	}

	public function update()
	{
		$id_user = $this->uri->segment(3);
		$data['isi'] =$this->db->get('user');
		$data['get'] = $this->model_user->update($id_user)->result();
		$this->load->view('user/edit',$data);
	}
	public function action_update()
	{
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$role = $this->input->post('role');

		$data = array(
            'id_user' => $id_user,
			'nama' => $nama,
			'username' => $username,
			'email' => $email,
			'no_telp' => $no_telp,
			'role' => $role
		);
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$data);
		redirect('user','refresh');
	}
}
