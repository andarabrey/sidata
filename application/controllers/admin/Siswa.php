<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {
	function __construct(){
		parent::__construct();
		$password = $this->session->userdata('pass');
		$level = $this->session->userdata('level');
		if($this->session->userdata('status') != "logged"){
			redirect('Login');
		}
		

		$this->load->model('M_siswa');
	}

	public function index(){
		$siswa= $this->M_siswa->viewData_siswa();

		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'admin/menejemen_siswa',
								'navbar'				=> 'admin/template/navbar',
								'siswa'					=> $siswa,
								);

		$this->load->view('index-dashboard',$data);
	}

	public function registrasi(){
		$siswa= $this->M_siswa->viewData_tmp();

		$data=array('mainheader'		=> 'template/mainheader',
								'mainpage'			=> 'admin/menejemen_reg',
								'navbar'				=> 'admin/template/navbar',
								'siswa'					=> $siswa,
								);

		$this->load->view('index-dashboard',$data);
	}

	function tambah(){
		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/tambah_siswa',
					'navbar'			=> 'admin/template/navbar',
		);

		$this->load->view('index-dashboard',$data);	
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
		$this->M_siswa->tambah_siswa($data);

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
			$this->M_siswa->tambah_ayah($data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
			);
			$this->M_siswa->tambah_ibu($data3);
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
			$this->M_siswa->tambah_ayah($data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
			);
			$this->M_siswa->tambah_ibu($data3);

			$data4=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namawali'),
				'ttl' => $this->input->post('ttlwali'),
				'agama' => $this->input->post('agamawali'),
				'pend_terakhir' => $this->input->post('lastpendwali'),
				'pekerjaan' => $this->input->post('pekerjaanwali'),
				'penghasilan' => $this->input->post('penghasilanwali'),
			);
			$this->M_siswa->tambah_wali($data4);
		}
		redirect('admin/Siswa');
	}

	function tambah_siswa_ke_list($id){
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
		$this->M_siswa->tambah_siswa($data);

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
			$this->M_siswa->tambah_ayah($data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
			);
			$this->M_siswa->tambah_ibu($data3);
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
			$this->M_siswa->tambah_ayah($data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
			);
			$this->M_siswa->tambah_ibu($data3);

			$data4=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namawali'),
				'ttl' => $this->input->post('ttlwali'),
				'agama' => $this->input->post('agamawali'),
				'pend_terakhir' => $this->input->post('lastpendwali'),
				'pekerjaan' => $this->input->post('pekerjaanwali'),
				'penghasilan' => $this->input->post('penghasilanwali'),
			);
			$this->M_siswa->tambah_wali($data4);
		}
		$this->M_siswa->tolak_siswa($id);
		redirect('admin/Siswa');
	}

	function edit_siswa($id){
		$siswa= $this->M_siswa->edit_siswa($id);
		$ayah= $this->M_siswa->edit_ayah($id);
		$ibu= $this->M_siswa->edit_ibu($id);
		$wali= $this->M_siswa->edit_wali($id);
		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/edit_siswa',
					'navbar'			=> 'admin/template/navbar',
					'siswa'				=> $siswa,
					'ayah'				=> $ayah,
					'ibu'				=> $ibu,
					'wali'				=> $wali,
		);

		$this->load->view('index-dashboard',$data);
	}

	function detail_siswa($id){
		$siswa= $this->M_siswa->edit_siswa($id);
		$ayah= $this->M_siswa->edit_ayah($id);
		$ibu= $this->M_siswa->edit_ibu($id);
		$wali= $this->M_siswa->edit_wali($id);
		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/detail_siswa',
					'navbar'			=> 'admin/template/navbar',
					'siswa'				=> $siswa,
					'ayah'				=> $ayah,
					'ibu'				=> $ibu,
					'wali'				=> $wali,
		);

		$this->load->view('index-dashboard',$data);
	}

	function detail_siswa_tmp($id){
		$siswa= $this->M_siswa->reg_siswa($id);
		$ayah= $this->M_siswa->reg_ayah($id);
		$ibu= $this->M_siswa->reg_ibu($id);
		$wali= $this->M_siswa->reg_wali($id);
		$data=array('mainheader'		=> 'template/mainheader',
					'mainpage'			=> 'admin/registrasi_siswa',
					'navbar'			=> 'admin/template/navbar',
					'siswa'				=> $siswa,
					'ayah'				=> $ayah,
					'ibu'				=> $ibu,
					'wali'				=> $wali,
		);

		$this->load->view('index-dashboard',$data);
	}

	function update_siswa($id){
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
		$this->M_siswa->update_siswa($id,$data);

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
			$this->M_siswa->update_ayah($id,$data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
				
			);
			$this->M_siswa->update_ibu($id,$data3);
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
			$this->M_siswa->update_ayah($id,$data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
				
			);
			$this->M_siswa->update_ibu($id,$data3);

			$data4=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namawali'),
				'ttl' => $this->input->post('ttlwali'),
				'agama' => $this->input->post('agamawali'),
				'pend_terakhir' => $this->input->post('lastpendwali'),
				'pekerjaan' => $this->input->post('pekerjaanwali'),
				'penghasilan' => $this->input->post('penghasilanwali'),
				
			);
			$this->M_siswa->update_wali($id,$data4);
		}
		redirect('admin/Siswa');
	}

	function register($id){
		$data=array
		(	
			'id_siswa' => $this->input->post('nisn'),
			'nem' => $this->input->post('nem'),
			'nama' => $this->input->post('namasiswa'),
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
		$this->M_siswa->update_siswa($id,$data);

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
			$this->M_siswa->update_ayah($id,$data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
				
			);
			$this->M_siswa->update_ibu($id,$data3);
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
			$this->M_siswa->update_ayah($id,$data2);

			$data3=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namaibu'),
				'ttl' => $this->input->post('ttlibu'),
				'agama' => $this->input->post('agamaibu'),
				'pend_terakhir' => $this->input->post('lastpendibu'),
				'pekerjaan' => $this->input->post('pekerjaanibu'),
				'penghasilan' => $this->input->post('penghasilanibu'),
				
			);
			$this->M_siswa->update_ibu($id,$data3);

			$data4=array(
				'id_siswa' => $this->input->post('nisn'),
				'nama' => $this->input->post('namawali'),
				'ttl' => $this->input->post('ttlwali'),
				'agama' => $this->input->post('agamawali'),
				'pend_terakhir' => $this->input->post('lastpendwali'),
				'pekerjaan' => $this->input->post('pekerjaanwali'),
				'penghasilan' => $this->input->post('penghasilanwali'),
				
			);
			$this->M_siswa->update_wali($id,$data4);
		}
		redirect('admin/Siswa');
	}

	function hapus_siswa($id){
		$this->M_siswa->hapus_siswa($id);
		redirect('admin/Siswa');
	}

	function tolak_siswa($id){
		$this->M_siswa->tolak_siswa($id);
		redirect('admin/Siswa/registrasi');
	}

	function print(){
		$siswa= $this->M_siswa->viewData_siswa();

		$data=array(			'siswa'					=> $siswa,
								);

		$this->load->view('admin/print_siswa',$data);
	}

	
}