<?php
class Iklan extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function createIklan($post){
    $this->load->helper('url');
    $slug = url_title($this->input->post('judul'), 'dash', TRUE);
    $idpembuat = $this->session->userdata('id');

    $data = array(
      'id_pembuatIklan' => $idpembuat,
      'judul' => $post['judul'],
      'slug' => $slug,
      'statusPencarian' => $post['pencarian'],
      'jenjang' => $post['jenjang'],
      'deskripsi' => $post['deskripsi']
    );
    return $this->db->insert('iklan', $data);
  }

  public function get_item_iklan($id = FALSE){
    $query = $this->db->get_where('iklan', array('id_iklan' => $id));
    return $query->row_array();
  }

  public function updateIklan($id,$post){
    $this->load->helper('url');
    $slug = url_title($this->input->post('judul'), 'dash', TRUE);

    $data = array(
      'judul' => $post['judul'],
      'slug' => $slug,
      'statusPencarian' => $post['pencarian'],
      'jenjang' => $post['jenjang'],
      'deskripsi' => $post['deskripsi']
    );
    $this->db->where('id_iklan', $id);
    return $this->db->update('iklan', $data);
  }

  public function daftarIklan($id = FALSE, $statusPencarian = FALSE){
    if($statusPencarian === FALSE && $id !== FALSE){
      $query = $this->db->get_where('iklan', array('id_pembuatIklan' => $id));
      return $query->result_array();
    }else if($id === FALSE && $statusPencarian !== FALSE){
      $this->db->select("iklan.*,member.nama, member.id");
      $this->db->from('iklan');
      $this->db->where(array('statusPencarian' => $statusPencarian));
      $this->db->join('member', 'iklan.id_pembuatIklan = member.id');
      $query = $this->db->get();
      return $query->result_array();
    }else if($id !== FALSE && $statusPencarian !== FALSE){
      $query = $this->db->get_where('iklan', array('id_iklan' => $id));
      return $query->row_array();
    }else if($id === FALSE && $statusPencarian === FALSE){
      $this->db->select("iklan.*,member.nama, member.id");
      $this->db->from('iklan');
      $this->db->join('member', 'iklan.id_pembuatIklan = member.id');
      $query = $this->db->get();
      return $query->result_array();
    }
  }

  public function deleteIklan($id){
    return $this->db->delete('iklan',array('id_iklan'=>$id));
  }



}
