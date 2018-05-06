<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_buku');
	}

	public function index()
	{	
		$buku= $this->M_buku->viewData_buku();
		$tipe= $this->M_buku->viewData_tipe();
		$kategori= $this->M_buku->viewData_kategori();

		$data=array(
					'content' 			=> 'home/content',
					'buku'					=> $buku,
					'tipe'					=> $tipe,
					'kategori'			=> $kategori,
					);

		$this->load->view('index',$data);
	}

	public function cari(){
		$cari=$this->input->get('cari');
		$cek=$this->M_buku->cari_data($cari);
      if($cek->num_rows()>0){
          $data['message']="";
		  $data['cari']=$cek->result();
		  $data['content']= 'home/hasilcari';
          $this->load->view('index',$data);
      }else{
          $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
		  $data['cari']=$cek->result();
		  $data['content']= 'home/hasilcari';
          $this->load->view('index',$data);
      }
	}
}