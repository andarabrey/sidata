<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		$level = $this->session->userdata('level');
		if($this->session->userdata('status') != "loginELIB"."$password"){
			redirect('Login');
		}
		else{
			if ($level != "Super Admin") {
				redirect('not_access');
			}
		}

		$this->load->model('M_buku');
	}

	public function index(){
		$buku= $this->M_buku->viewData_buku();
		$tipe= $this->M_buku->viewData_tipe();
		$kategori= $this->M_buku->viewData_kategori();

		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'admin/menejemen_buku',
								'navbar'				=> 'admin/template/navbar',
								'buku'					=> $buku,
								'tipe'					=> $tipe,
								'kategori'			=> $kategori,
								);

		$this->load->view('index-dashboard',$data);
	}

	function tambah(){
		$data=array('judul'					=> $this->input->post('judul'),
								'penulis'				=> $this->input->post('penulis'),
								'tahun_terbit'	=> $this->input->post('tahun'),
								'type'					=> $this->input->post('type'),
								'kategori'			=> $this->input->post('kategori'),
								'penerbit'			=> $this->input->post('penerbit'),
								);

		$this->M_buku->tambah_buku($data);
		redirect('admin/buku/');
	}

	function edit_buku($id){
		$data=array('judul'					=> $this->input->post('judul'),
								'penulis'				=> $this->input->post('penulis'),
								'tahun_terbit'	=> $this->input->post('tahun'),
								'type'					=> $this->input->post('type'),
								'kategori'			=> $this->input->post('kategori'),
								'penerbit'			=> $this->input->post('penerbit'),
								);

		$this->M_buku->update_buku($id, $data);
		redirect('admin/buku/');
	}

	function hapus_buku($id){
		$this->M_buku->hapus_buku($id);
		redirect('admin/buku/');
	}

	function tambah_tipe(){
		$data=array('tipe'					=> $this->input->post('tipe'),
								);

		$this->M_buku->tambah_tipe($data);
		redirect('admin/buku/');
	}

	function update_tipe($id){
		$data=array('tipe'					=> $this->input->post('tipe'),
								);

		$this->M_buku->update_tipe($id, $data);
		redirect('admin/buku/');
	}

	function hapus_tipe($id){
		$this->M_buku->hapus_tipe($id);
		redirect('admin/buku/');
	}

	function tambah_kategori(){
		$data=array('kategori'			=> $this->input->post('kategori'),
								);

		$this->M_buku->tambah_kategori($data);
		redirect('admin/buku/');
	}

	function update_kategori($id){
		$data=array('kategori'					=> $this->input->post('kategori'),
								);

		$this->M_buku->update_kategori($id, $data);
		redirect('admin/buku/');
	}

	function hapus_kategori($id){
		$this->M_buku->hapus_kategori($id);
		redirect('admin/buku/');
	}

}