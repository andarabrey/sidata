<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_user extends CI_Model{

	function viewData(){
		$query = $this->db->query("select * from user");
		return $query->result_array();
	}

	function registrasi_user($data){
		$this->db->insert('user',$data);
	}

	function hapus($x){
		$this->db->where('id_user',$x);
		return $this->db->delete('user');
	}

	function update($id,$data){
		$this->db->where('id_user', $id);
		return $this->db->update("user",$data);
	}
}