<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		if($this->session->userdata('status') != "logged"){
			redirect('Login');
		}
		
	}

	public function index(){
		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'admin/template/mainpage',
								'navbar'				=> 'admin/template/navbar',
								);

		$this->load->view('index-dashboard',$data);
	}

}