<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_siswa extends CI_Model{

	private $table="tb_siswa";
	private $primary="id_siswa";
    private $secondary="judul";

	function viewData_siswa(){
		$query = $this->db->query("select * from tb_siswa order by id_siswa DESC");
		return $query->result_array();
	}

	function viewData_tmp(){
		$query = $this->db->query("select * from tb_tmp order by nem DESC");
		return $query->result_array();
	}

	function count_siswa(){
		$query = $this->db->query("SELECT id_siswa FROM tb_siswa");
		return $query->num_rows();
	}

	function tambah_siswa($data){
		$this->db->insert('tb_siswa',$data);
	}

	function tambah_siswa_tmp($data){
		$this->db->insert('tb_tmp',$data);
	}

	function tambah_ayah($data2){
		$this->db->insert('tb_ayah',$data2);
	}

	function tambah_ayah_tmp($data2){
		$this->db->insert('tb_tmp_ayah',$data2);
	}

	function tambah_ibu($data3){
		$this->db->insert('tb_ibu',$data3);
	}

	function tambah_ibu_tmp($data3){
		$this->db->insert('tb_tmp_ibu',$data3);
	}

	function tambah_wali($data4){
		$this->db->insert('tb_wali',$data4);
	}

	function tambah_wali_tmp($data4){
		$this->db->insert('tb_tmp_wali',$data4);
	}

	function edit_siswa($id){
		$query = $this->db->query("select * from tb_siswa where id_siswa='$id'");
    	return $query->result_array();
	}

	function reg_siswa($id){
		$query = $this->db->query("select * from tb_tmp where id_siswa='$id'");
    	return $query->result_array();
	}

	function edit_ayah($id){
		$query = $this->db->query("select * from tb_ayah where id_siswa='$id'");
    	return $query->result_array();
	}

	function reg_ayah($id){
		$query = $this->db->query("select * from tb_tmp_ayah where id_siswa='$id'");
    	return $query->result_array();
	}

	function edit_ibu($id){
		$query = $this->db->query("select * from tb_ibu where id_siswa='$id'");
    	return $query->result_array();
	}

	function reg_ibu($id){
		$query = $this->db->query("select * from tb_tmp_ibu where id_siswa='$id'");
    	return $query->result_array();
	}

	function edit_wali($id){
		$query = $this->db->query("select * from tb_wali where id_siswa='$id'");
    	return $query->result_array();
	}

	function reg_wali($id){
		$query = $this->db->query("select * from tb_tmp_wali where id_siswa='$id'");
    	return $query->result_array();
	}

	function update_siswa($id,$data){
		$this->db->where('id_siswa', $id);
		return $this->db->update("tb_siswa",$data);
	}

	function update_ayah($id,$data2){
		$this->db->where('id_siswa', $id);
		return $this->db->update("tb_ayah",$data2);
	}

	function update_ibu($id,$data3){
		$this->db->where('id_siswa', $id);
		return $this->db->update("tb_ibu",$data3);
	}

	function update_wali($id,$data4){
		$this->db->where('id_siswa', $id);
		return $this->db->update("tb_wali",$data4);
	}

	function hapus_siswa($id){
		$this->db->where('id_siswa',$id);
		return $this->db->delete('tb_siswa');
	}

	function tolak_siswa($id){
		$this->db->where('id_siswa',$id);
		return $this->db->delete('tb_tmp');
	}

}