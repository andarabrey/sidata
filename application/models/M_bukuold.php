<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_buku extends CI_Model{

	private $table="tb_buku";
	private $primary="id_buku";
    private $secondary="judul";

	function viewData_buku(){
		$query = $this->db->query("select * from tb_buku");
		return $query->result_array();
	}

	function tambah_buku($data){
		$this->db->insert('tb_buku',$data);
	}

	function update_buku($id,$data){
		$this->db->where('id_buku', $id);
		return $this->db->update("tb_buku",$data);
	}

	function hapus_buku($id){
		$this->db->where('id_buku',$id);
		return $this->db->delete('tb_buku');
	}

	function viewData_tipe(){
		$query = $this->db->query("select * from tipe_buku");
		return $query->result_array();
	}

	function tambah_tipe($data){
		$this->db->insert('tipe_buku',$data);
	}

	function update_tipe($id,$data){
		$this->db->where('id_tipe', $id);
		return $this->db->update("tipe_buku",$data);
	}

	function hapus_tipe($id){
		$this->db->where('id_tipe',$id);
		return $this->db->delete('tipe_buku');
	}

	function viewData_kategori(){
		$query = $this->db->query("select * from kategori_buku");
		return $query->result_array();
	}

	function tambah_kategori($data){
		$this->db->insert('kategori_buku',$data);
	}

	function update_kategori($id,$data){
		$this->db->where('id_kategori', $id);
		return $this->db->update("kategori_buku",$data);
	}

	function hapus_kategori($id){
		$this->db->where('id_kategori',$id);
		return $this->db->delete('kategori_buku');
	}

	function cari_data($cari){
		$this->db->like($this->primary,$cari);
		$this->db->or_like("judul",$cari);
		$this->db->or_like("tahun_terbit",$cari);
		$this->db->or_like("penulis",$cari);
		$this->db->or_like("penerbit",$cari);
		$this->db->or_like("type",$cari);
		$this->db->or_like("kategori",$cari);
        return $this->db->get($this->table);
	}
}