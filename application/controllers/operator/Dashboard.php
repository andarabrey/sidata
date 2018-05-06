<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		$level = $this->session->userdata('level');
		if($this->session->userdata('status') != "loginELIB"."$password"){
			redirect('Login');
		}
		else{
			if ($level != "Operator") {
				redirect('not_access');
			}
		}
	}

	public function index(){
		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'operator/template/mainpage',
								'navbar'				=> 'operator/template/navbar',
								);

		$this->load->view('index-dashboard',$data);
	}

}