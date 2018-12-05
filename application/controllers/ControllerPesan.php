<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPesan extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('pesan');
    $this->load->model('member');
    $this->load->helper('url_helper');
    $this->load->helper('date');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
  }

  public function buatPesan($id_pengirim, $id_penerima){
    $this->form_validation->set_rules('pesan', 'Pesan', 'required');
    $this->form_validation->set_message('required', '<div class="alert alert-danger">%s tidak boleh kosong !</div>');

    $data['penerima'] = $this->member->getData(FALSE, $id_penerima);
    $data['pesan'] = $this->pesan->getData($id_pengirim, $id_penerima);
		$data['notifikasi'] = $this->Notifikasi();

    $this->pesan->updateNotifikasi($id_penerima, "read");

		if($this->form_validation->run() === FALSE){
			$this->load->view('header');
			$this->load->view('member/kirimPesan', $data);
			$this->load->view('footer');
		}else{
      $this->pesan->createPesan($id_pengirim, $id_penerima, $this->input->post());
      redirect($_SERVER['HTTP_REFERER']);
		}
  }

  public function daftarPesan(){
    $data['pesan'] = $this->pesan->getData($this->session->userdata('id'), FALSE);
    $data['notifikasi'] = $this->notifikasi($data['pesan']);
		$data['JMLnotifikasi'] = $this->Notifikasi();
    $this->load->view('header');
    $this->load->view('member/listPesan', $data);
    $this->load->view('footer');
  }

  public function notifikasi($id_pengirim = FALSE){
    if($id_pengirim === FALSE){
			$cek = $this->pesan->getNotifikasi()->num_rows();
	    return $cek;
		}else{
			$jumlahPesan;
	    if(count($id_pengirim) > 0){
	      foreach ($id_pengirim as $item) {
	        $jumlahPesan[] = $this->pesan->getNotifikasi($item['ID'])->num_rows();
	      }
				return $jumlahPesan;
	    }
		}
  }

}
