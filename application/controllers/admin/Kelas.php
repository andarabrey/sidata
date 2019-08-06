<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Kelas extends CI_Controller{
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		$level = $this->session->userdata('level');
		if($this->session->userdata('status') != "logged"){
			redirect('Login');
		}

		$this->load->model('M_kelas');
	}

	function index(){
		$kelas= $this->M_kelas->lihatkelas();

		$data=array('mainheader'	=> 'template/mainheader',
                    'mainpage'		=> 'admin/menejemen_kelas',
                    'navbar'		=> 'admin/template/navbar',
                    'kelas'		    => $kelas
								);

		$this->load->view('index-dashboard',$data);
	}

	function tambah_kelas(){
		$data=array(
					'nama_kelas'=> $this->input->post('namakelas'),
					);

		$this->M_kelas->tambah_kelas($data);
		redirect('admin/kelas/');
	}

	function hapus($id){
		$this->M_kelas->hapus_kelas($id);
		redirect('admin/kelas/');
	}

	function update($id){
		$data=array(			
            		'nama_kelas'=> $this->input->post('namakelas'),
					);
		$this->M_kelas->update_kelas($id,$data);
		redirect('admin/kelas/');
    }
    
    function detail($id){
        
        $kelas= $this->M_kelas->lihatkelas();
        $datakelas= $this->M_kelas->lihatdatakelas($id);
        $namakelas= $this->M_kelas->lihatnamakelas($id);
        $datasiswa= $this->M_kelas->lihatdatasiswa();
        $data = array(  'mainheader'	=> 'template/mainheader',
                        'mainpage'		=> 'admin/menejemen_datakelas',
                        'navbar'		=> 'admin/template/navbar',
                        'kelas'		    => $kelas,
                        'datakelas'     => $datakelas,
                        'datasiswa'     => $datasiswa,
                        'idk'           => $id,
                        'namakelas'     => $namakelas,
                    );
     $this->load->view('index-dashboard',$data);
    }

    function print($id){
		$kelas= $this->M_kelas->lihatkelas();
        $datakelas= $this->M_kelas->lihatdatakelas($id);
        $namakelas= $this->M_kelas->lihatnamakelas($id);
        $datasiswa= $this->M_kelas->lihatdatasiswa();
        $data = array(  'kelas'		    => $kelas,
                        'datakelas'     => $datakelas,
                        'datasiswa'     => $datasiswa,
                        'idk'           => $id,
                        'namakelas'     => $namakelas,
                    );

		$this->load->view('admin/cetak_kelas',$data);
	}


    function hapus_siswa($id,$id2){
        $this->M_kelas->hapus_siswa($id,$id2);
        $data2 = array('stkelas' => "N" );
        $this->M_kelas->update_kelassiswa($id,$data2);
		redirect('admin/kelas/');
    }
    
    function tambah_siswa(){
        $data = array(  
                'id_siswa' => $this->input->post('idsiswa'),
                'id_kelas' => $this->input->post('idkelas'), 
                    );
        $this->M_kelas->tambah_datasiswa($data);
        $id =  $this->input->post('idsiswa');
        $data2 = array('stkelas' => "Y" );
        $this->M_kelas->update_kelassiswa($id,$data2);
        redirect('admin/kelas/');
    }
}