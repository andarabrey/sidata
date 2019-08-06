<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_kelas extends CI_Model{

	private $table="tb_datakelas";


	function lihatkelas(){
		$query = $this->db->query("select * from tb_kelas");
		return $query->result_array();
	}

	function tambah_kelas($data){
		$this->db->insert('tb_kelas',$data);
	}

	function hapus_kelas($x){
		$this->db->where('id_kelas',$x);
		return $this->db->delete('tb_kelas');
	}

	function update_kelas($id,$data){
		$this->db->where('id_kelas', $id);
		return $this->db->update("tb_kelas",$data);
	}

	function lihatdatakelas($id){
		$query = $this->db->query(	"SELECT tb_kelas.nama_kelas, tb_siswa.nama, tb_datakelas.id_siswa, tb_datakelas.id_kelas 
									from tb_datakelas 
									INNER JOIN tb_kelas 
									INNER JOIN tb_siswa 
									where tb_datakelas.id_kelas = tb_kelas.id_kelas 
									and tb_datakelas.id_siswa = tb_siswa.id_siswa 
									and  tb_datakelas.id_kelas='$id'
									ORDER BY tb_siswa.nama ASC ");
		return $query->result_array();
	}
	function lihatdatasiswa(){
		$query = $this->db->query(	"SELECT * from tb_siswa WHERE stkelas = 'N' ");
		return $query->result_array();
	}

	function lihatnamakelas($id){
		$query = $this->db->query(	"SELECT nama_kelas from tb_kelas where id_kelas = $id");
									return $query->result_array();
	}

	function hapus_siswa($id,$id2){
		$this->db->where('id_siswa',$id);
		$this->db->where('id_kelas',$id2);
		return $this->db->delete('tb_datakelas');
	}

	function tambah_datasiswa($data){
		$this->db->insert('tb_datakelas',$data);
	}

	function update_kelassiswa($id,$data2){
		$this->db->where('id_siswa', $id);
		return $this->db->update('tb_siswa',$data2);
	}

	
}