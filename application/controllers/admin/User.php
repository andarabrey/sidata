<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		$level = $this->session->userdata('level');
		if($this->session->userdata('status') != "logged"){
			redirect('Login');
		}

		$this->load->model('M_user');
	}

	function index(){
		$data_user= $this->M_user->viewData();

		$data=array('mainheader'	=> 'template/mainheader',
								'mainpage'		=> 'admin/menejemen_user',
								'navbar'			=> 'admin/template/navbar',
								'data_user'		=> $data_user
								);

		$this->load->view('index-dashboard',$data);
	}

	function registrasi_user(){
		$data=array(
								'username'			=> $this->input->post('username'),
								'password'			=> $this->input->post('password'),
								);

		$this->M_user->registrasi_user($data);
		redirect('admin/user/');
	}

	function hapus($id){
		$this->M_user->hapus($id);
		redirect('admin/user/');
	}

	function update($id){
		$data=array(			'username'			=> $this->input->post('username'),
								'password'			=> $this->input->post('password'),
								);

		$this->M_user->update($id,$data);
		redirect('admin/user/');
	}
}