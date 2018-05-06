<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_login extends CI_Model{

	function aksi_login($user,$pass){
		$query = $this->db->query("select * from user where username='$user' and password='$pass'");
		return $query->result_array();
	}
}
