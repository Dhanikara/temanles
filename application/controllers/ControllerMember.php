<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerMember extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('member');
		$this->load->model('pesan');
    $this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
  }

	public function registrasi(){
		if($this->session->userdata('status') === "login"){
		  $this->load->view('header');
		  $this->load->view('errorSudahLogin');
		  $this->load->view('footer');
		}else{
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('telp', 'Telepon', 'required');
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
			$this->form_validation->set_message('required', '<div class="alert alert-danger">%s tidak boleh kosong !</div>');

			if($this->form_validation->run() === FALSE){
				$this->load->view('header');
				$this->load->view('member/registrasi');
				$this->load->view('footer');
			}else{
				//cek email sudah ada apa belum
				$cek = $this->member->login("member",array('email'=> $this->input->post('email')))->num_rows();
				if($cek>0){
					$this->load->view('header');
					$this->load->view('errorEmailSudahAda');
					$this->load->view('footer');
				}else{
					$config['upload_path'] = './foto/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max'] = 0;
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('foto')){
		        echo $this->upload->display_errors('<p>', '</p>');
		    	}else{
						$this->member->createMember($this->upload->data('file_name'),$this->input->post());
						redirect(base_url('login'));
					}
				}
			}
		}
	}

	public function editProfil(){
		if($this->session->userdata('status') != "login"){
		  $this->load->view('header');
		  $this->load->view('errorBelumLogin');
		  $this->load->view('footer');
		}else{
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('telp', 'Telepon', 'required');
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
			$this->form_validation->set_message('required', '<div class="alert alert-danger">%s tidak boleh kosong !</div>');

			$id = $this->session->userdata('id');
			$data['dataProfil'] = $this->member->getData(FALSE, $id);
			$data['notifikasi'] = $this->jumlahNotifikasi();

			if($this->form_validation->run() === FALSE){
				$this->load->view('header');
				$this->load->view('member/editProfil', $data);
				$this->load->view('footer');
			}else{
				$cek = $this->member->login("member",array('email'=> $this->input->post('email')))->num_rows();
				if($cek>0 && $this->input->post('email') != $this->session->userdata('email')){
					$this->load->view('header');
					$this->load->view('errorEmailSudahAda');
					$this->load->view('footer');
				}else{
					$config['upload_path'] = './foto/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max'] = 0;
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('foto')){
		        echo $this->upload->display_errors('<p>', '</p>');
		    	}else{
						$data_session = array(
							'nama' => $this->input->post('nama'),
							'status' => "login",
							'id' => $id,
							'email' => $this->input->post('email'),
							'alamat' => $this->input->post('alamat'),
							'deskripsi' => $this->input->post('deskripsi'),
							'telp' => $this->input->post('telp'),
							'foto' => "foto/".$this->upload->data('file_name')
							);
						$this->session->set_userdata($data_session);
						$this->member->editData($this->upload->data('file_name'),$id,$this->input->post());
			      redirect('profil');
					}
				}
			}
		}
	}

	public function login(){
		if($this->session->userdata('status') == "login"){
		  $this->load->view('header');
		  $this->load->view('errorSudahLogin');
		  $this->load->view('footer');
		}else{
			$this->form_validation->set_rules('nama', 'Username', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			$this->form_validation->set_message('required', '<div class="alert alert-danger">%s tidak boleh kosong !</div>');
			if($this->form_validation->run() === FALSE){
				$this->load->view('header');
				$this->load->view('member/login');
				$this->load->view('footer');
			}else{
				$username = $this->input->post('nama');
				$password = $this->input->post('pass');
				$where = array(
					'nama' => $username,
					'password' => md5($password)
					);
				$cek = $this->member->login("member",$where)->num_rows();
				if($cek > 0){

					$id = $this->member->getData($username, FALSE)->id;
					$foto = $this->member->getData($username, FALSE)->foto;
					$email = $this->member->getData($username, FALSE)->email;
					$alamat = $this->member->getData($username, FALSE)->alamat;
					$deskripsi = $this->member->getData($username, FALSE)->deskripsi;
					$telp = $this->member->getData($username, FALSE)->noTelp;

					$data_session = array(
						'nama' => $username,
						'status' => "login",
						'id' => $id,
						'email' => $email,
						'alamat' => $alamat,
						'deskripsi' => $deskripsi,
						'telp' => $telp,
						'foto' => $foto
						);

					$this->session->set_userdata($data_session);

					redirect('profil');

				}else{
				 	$this->session->set_flashdata('message',
					' <div class="alert alert-danger">
						Username atau Password yang anda masukkan salah.
						</div>');
				 	$this->load->view('header');
		 			$this->load->view('member/login');
		 			$this->load->view('footer');
				}
			}
		}
	}

	public function profil(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('header');
			$this->load->view('errorBelumLogin');
			$this->load->view('footer');
		}else{
			$data['notifikasi'] = $this->jumlahNotifikasi();
			$this->load->view('header');
			$this->load->view('member/profil', $data);
			$this->load->view('footer');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function lihatProfilMemberLain($id){
		if($this->session->userdata('status') != "login"){
		  $this->load->view('header');
		  $this->load->view('errorBelumLogin');
		  $this->load->view('footer');
		}else{
			if($id == $this->session->userdata('id')){
				redirect(base_url('profil'));
			}else{
				$data['dataMember'] = $this->member->getData(FALSE, $id);
				$this->load->view('header');
				$this->load->view('member/lihatMemberLain', $data);
				$this->load->view('footer');
		}
	}
}

	public function jumlahNotifikasi(){
		$cek = $this->pesan->getNotifikasi()->num_rows();
    return $cek;
	}

}
