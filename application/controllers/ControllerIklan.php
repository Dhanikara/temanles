<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerIklan extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('iklan');
    $this->load->model('komentar');
    $this->load->model('member');
		$this->load->model('pesan');
    $this->load->helper('url_helper');
    $this->load->helper('date');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
  }


  public function buatIklan(){
		if($this->session->userdata('status') != "login"){
		  $this->load->view('header');
		  $this->load->view('errorBelumLogin');
		  $this->load->view('footer');
		}else{
			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('pencarian', 'Pencarian', 'required');
			$this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			$this->form_validation->set_message('required', '<div class="alert alert-danger">%s tidak boleh kosong !</div>');
			$data['notifikasi'] = $this->jumlahNotifikasi();

	    if($this->form_validation->run() === FALSE){
				$this->load->view('header');
				$this->load->view('member/buatIklan', $data);
				$this->load->view('footer');
			}else{
	      $this->iklan->createIklan($this->input->post());
	      redirect(base_url('profil/listAd'));
			}
		}
  }

  public function ubahIklan($id){
		if($this->session->userdata('status') != "login"){
		  $this->load->view('header');
		  $this->load->view('errorBelumLogin');
		  $this->load->view('footer');
		}else{
			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('pencarian', 'Pencarian', 'required');
			$this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			$this->form_validation->set_message('required', '<div class="alert alert-danger">%s tidak boleh kosong !</div>');


	    if($this->form_validation->run() === FALSE){
				$data['notifikasi'] = $this->jumlahNotifikasi();
	      $data['item_iklan'] = $this->iklan->get_item_iklan($id);
				$this->load->view('header');
				$this->load->view('iklan/ubahIklan', $data);
				$this->load->view('footer');
			}else{
	      $this->iklan->updateIklan($id,$this->input->post());
	      redirect('profil/listAd');
			}
		}
  }

  public function listIklanMember($id = FALSE){
		if($id === FALSE){
			$idMember = $this->session->userdata('id');
			$data['notifikasi'] = $this->jumlahNotifikasi();
			$data['iklan'] = $this->iklan->daftarIklan($idMember, FALSE);
			$this->load->view('header');
			$this->load->view('member/listIklanMember', $data);
			$this->load->view('footer');
		}else{
			$data['iklan'] = $this->iklan->daftarIklan($id, FALSE);
			$data['dataMember'] = $this->member->getData(FALSE, $id);
			$this->load->view('header');
			$this->load->view('iklan/listIklanMemberLain', $data);
			$this->load->view('footer');
		}
  }

  public function listSeluruhIklan($statusPencarian){
    $data['iklan'] = $this->iklan->daftarIklan(FALSE, $statusPencarian);
		$data['statusPencarian'] = $statusPencarian;
    $this->load->view('header');
    $this->load->view('iklan/listSeluruhIklan', $data);
    $this->load->view('footer');
  }


  public function tampilIklan($statusPencarian, $id_iklan){
    $data['iklan'] = $this->iklan->daftarIklan($id_iklan, $statusPencarian);

		$data['member'] = $this->member->getData(FALSE, $data['iklan']['id_pembuatIklan']);
    $this->load->view('header');
    $this->load->view('iklan/detilIklan', $data);
    $this->load->view('footer');
  }


	public function hapusIklan($id_iklan){
		$this->iklan->deleteIklan($id_iklan);
    redirect('profil/listAd');
	}

	public function jumlahNotifikasi(){
		$cek = $this->pesan->getNotifikasi()->num_rows();
    return $cek;
	}

}
