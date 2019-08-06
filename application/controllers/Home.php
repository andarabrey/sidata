<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
		parent::__construct();

		$this->load->model('M_siswa');
		$this->load->model('M_kelas');

	}

	public function index(){
		$data['jml'] = $this->M_siswa->count_siswa();

		$this->load->view('index',$data);
    }
    
    public function daftar(){

        $this->load->view('tambah');
    }

	function tambah_siswa(){
		$data=array
		(	
			'id_siswa' => $this->input->post('nisn'),
			'nama' => $this->input->post('namasiswa'),
			'nem' => $this->input->post('nem'),
			'jk' => $this->input->post('jksiswa'),
			'ttl' => $this->input->post('ttlsiswa'),
			'agama' => $this->input->post('agamasiswa'),
			'bb' => $this->input->post('bb'),
			'tb' => $this->input->post('tb'),
			'alamat' => $this->input->post('alamatsiswa'),
			'tinggal' => $this->input->post('tinggal'),
			'jarak' => $this->input->post('jarak'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
			'stkelas' => "N",
		);
		$this->M_siswa->tambah_siswa_tmp($data);

		if($this->input->post('namawali') == ""){
			$data2=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaayah'),
				'ttl' => $this->input->post('ttlayah'),
				'agama' => $this->input->post('agamaayah'),
				'pekerjaan' => $this->input->post('pekerjaanayah'),
				'pend_terakhir' => $this->input->post('lastpendayah'),
				'penghasilan' => $this->input->post('penghasilanayah'),
			);
			$this->M_siswa->tambah_ayah_tmp($data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
			);
			$this->M_siswa->tambah_ibu_tmp($data3);
		}else{
			$data2=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaayah'),
				'ttl' => $this->input->post('ttlayah'),
				'agama' => $this->input->post('agamaayah'),
				'pend_terakhir' => $this->input->post('lastpendayah'),
				'pekerjaan' => $this->input->post('pekerjaanayah'),
				'penghasilan' => $this->input->post('penghasilanayah'),
			);
			$this->M_siswa->tambah_ayah_tmp($data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
			);
			$this->M_siswa->tambah_ibu_tmp($data3);

			$data4=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namawali'),
				'ttl' => $this->input->post('ttlwali'),
				'agama' => $this->input->post('agamawali'),
				'pend_terakhir' => $this->input->post('lastpendwali'),
				'pekerjaan' => $this->input->post('pekerjaanwali'),
				'penghasilan' => $this->input->post('penghasilanwali'),
			);
			$this->M_siswa->tambah_wali_tmp($data4);
		}
		redirect('home/sukses');
	}
    
    function sukses(){
        $this->load->view('sukses');
	}
	
    function detail($id){
        
        $kelas= $this->M_kelas->lihatkelas();
        $datakelas= $this->M_kelas->lihatdatakelas($id);
        $namakelas= $this->M_kelas->lihatnamakelas($id);
        $datasiswa= $this->M_kelas->lihatdatasiswa();
        $data = array( 
                        'kelas'		    => $kelas,
                        'datakelas'     => $datakelas,
                        'datasiswa'     => $datasiswa,
                        'idk'           => $id,
                        'namakelas'     => $namakelas,
                    );
     $this->load->view('lihat_kelas',$data);
    }

    function lihat(){
		$kelas= $this->M_kelas->lihatkelas();
		$data = array('kelas' => $kelas );
    	$this->load->view('hasil',$data);
    }

}