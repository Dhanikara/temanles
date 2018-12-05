<?php
class Member extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function createMember($path,$post){
    $data = array(
    'nama' => $post['nama'],
    'email' => $post['email'],
    'password' => md5($post['pass']),
    'alamat' => $post['alamat'],
    'noTelp' => $post['telp'],
    'deskripsi' => $post['deskripsi'],
    'foto'=>'foto/'.$path
    );
    return $this->db->insert('member', $data);
  }

  public function login($table,$where){
		return $this->db->get_where($table,$where);
	}

  public function getData($username = FALSE, $id = FALSE){
    if($id === FALSE){
      $query = $this->db->get_where('member', array('nama'=>$username));
      return $query->row();
    }else if($username === FALSE){
      $query = $this->db->get_where('member', array('id'=>$id));
      return $query->row_array();
    }
  }

  public function editData($path,$id,$post){
    $data = array(
    'nama' => $post['nama'],
    'email' => $post['email'],
    'password' => md5($post['pass']),
    'alamat' => $post['alamat'],
    'noTelp' => $post['telp'],
    'deskripsi' => $post['deskripsi'],
    'foto'=>'foto/'.$path
    );
    $this->db->where('id', $id);
    return $this->db->update('member', $data);
  }

  public function listMember(){
    $query = $this->db->get('member');
		return $query->result_array();
	}

  public function delete($id){
    return $this->db->delete('member',array('id'=>$id));
  }


}
