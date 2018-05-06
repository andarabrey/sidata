<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('M_login');
	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$cek = $this->M_login->aksi_login($user,$pass);

		if($cek){
			$data_session = array(
				'user' 		=> $user,
				'nama'		=> $cek[0]['nama_lengkap'],
				'id'			=> $cek[0]['username'],
				'pass'		=> $cek[0]['password'],
				'level'		=> $cek[0]['level'],
				'status' 	=> "loginELIB".$cek[0]['password']
				);
			$this->session->set_userdata($data_session);

			if($cek[0]['level'] == "Super Admin"){
				redirect('admin/Dashboard');
			}
			elseif ($cek[0]['level'] == "Operator") {
				redirect('operator/Dashboard');
			}
			elseif ($cek[0]['level'] == "Mahasiswa") {
				redirect('Home');
			}
			else{
				echo "blablabla";
			}
		}else{
			//$data=array('galon' => "Username dan Password Anda Salah");
			//$this->load->view('login',$data);
			echo "anda galon, gagal login";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Home');
	}

}