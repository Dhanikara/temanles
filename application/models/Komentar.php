<?php
class Komentar extends CI_Model{

  public function __construct(){
    $this->load->database();
    $this->load->helper('date');
  }

  public function createKomentar($post){
    $data = array(
    'id_iklan' => $post['id_iklan'],
    'id_pembuatIklan' => $post['id_pembuatIklan'],
    'id_pengirim' => $this->session->userdata('id'),
    'komentar' => $post['komentar']
    );
    $this->db->set('waktu', 'NOW()', FALSE);
    return $this->db->insert('komentar', $data);
  }

  public function getKomentar($id_iklan){
    $this->db->select("komentar.komentar,komentar.waktu,komentar.id_pengirim,member.nama, member.foto");
    $this->db->from('komentar');
    $this->db->where(array('id_iklan' => $id_iklan));
    $this->db->join('member', 'komentar.id_pengirim = member.id');
    $this->db->order_by('waktu','ASC');
    $query = $this->db->get();
    return $query->result_array();
  }


}
