<?php
class Pesan extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function createPesan($id_pengirim, $id_penerima, $post){
    $data = array(
    'id_pengirim' => $id_pengirim,
    'id_penerima' => $id_penerima,
    'pesan' => $post['pesan']
    );
    $this->db->set('waktu', 'NOW()', FALSE);
    return $this->db->insert('pesan', $data);
  }

  public function getData($id_pengirim = FALSE, $id_penerima = FALSE){
    if($id_penerima === FALSE){
      $sql = $this->db->query("SELECT DISTINCT pesan.id_pengirim as ID, member.nama as nama FROM pesan,member WHERE pesan.id_penerima = $id_pengirim and pesan.id_pengirim = member.id
          UNION
          SELECT DISTINCT pesan.id_penerima, member.nama FROM pesan,member WHERE pesan.id_pengirim = $id_pengirim and pesan.id_penerima = member.id ");
      return $sql->result_array();
    }else{
      $sql = $this->db->query("SELECT pesan.*, member.nama FROM pesan,member WHERE ((id_pengirim = $id_pengirim and id_penerima = $id_penerima) or (id_pengirim = $id_penerima and id_penerima = $id_pengirim)) and pesan.id_pengirim = member.id");
      return $sql->result_array();
    }
  }

  public function getNotifikasi($id_pengirim = FALSE){
    if($id_pengirim === FALSE){
      return $this->db->get_where('pesan',array('id_penerima' => $this->session->userdata('id'), 'status' => 'unread'));
    }else{
      return $this->db->get_where('pesan',array('id_penerima' => $this->session->userdata('id'), 'id_pengirim' => $id_pengirim,'status' => 'unread'));
    }
  }

  public function updateNotifikasi($id_penerima, $status){
    $data = array('status' => $status);
    return $this->db->update('pesan', $data, array('id_pengirim' => $id_penerima, 'id_penerima' => $this->session->userdata('id')));
  }

}
