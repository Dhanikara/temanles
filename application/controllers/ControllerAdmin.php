<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAdmin extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('member');
    $this->load->model('iklan');
    $this->load->model('komentar');
    $this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
  }

  public function loginAdmin(){
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required');

    if($this->form_validation->run() === FALSE){
      $this->load->view('header');
      $this->load->view('admin/login');
      $this->load->view('footer');
    }else{
      $email = $this->input->post('email');
      $password = $this->input->post('pass');

      if($email === "admin" && $password === "admin"){
        $data_session = array(
					'nama' => "ADMIN",
					'status' => "login"
					);
				$this->session->set_userdata($data_session);
				redirect('admin/kelolaSistem');
      }else{
        echo "Email dan Password tidak cocok dengan email password admin";
        $this->load->view('header');
        $this->load->view('admin/login');
        $this->load->view('footer');
      }
    }
  }

  public function logoutAdmin(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

  public function kelolaSistem(){
    if($this->session->userdata('status') != "login"){
			echo "Anda belum memilikin akses</p>";
		}else{
			$this->load->view('header');
			$this->load->view('admin/kelolaSistem');
			$this->load->view('footer');
		}
  }

  public function listMember(){
    $data['dataMember'] = $this->member->listMember();
    $this->load->view('header');
    $this->load->view('admin/listMember', $data);
    $this->load->view('footer');
  }

  public function hapusMember($id){
    $this->member->delete($id);
    redirect('admin/kelolaSistem/member');
  }

  public function listIklan(){
    $data['dataIklan'] = $this->iklan->daftarIklan();
    $this->load->view('header');
    $this->load->view('admin/listIklan', $data);
    $this->load->view('footer');
  }

  public function hapusIklan($id_iklan){
		$this->iklan->deleteIklan($id_iklan);
    redirect('admin/kelolaSistem/iklan');
	}

}
