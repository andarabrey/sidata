<div class="content-wrapper">
<section class="content-header">
    <h1>
      MENEJEMEN SISWA
      <small></small>
    </h1>
  </section>

  <section class="context">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspDetail Data Siswa</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <?php foreach ($siswa as $list_siswa) { ?>
                        <form method="post" action="<?php echo base_url();?>/admin/siswa/update_siswa/<?php echo $list_siswa['id_siswa'] ?>">
                        <h4>IDENTITAS PESERTA DIDIK</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10 col-md-4">
                                <p><?php echo $list_siswa['nama'];?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['id_siswa'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">NEM</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['nem'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['jk'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['agama'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['ttl'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Status Tinggal</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['tinggal'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Berat Badan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['bb'];?> Kg
                                </div>
                                <label  class="col-sm-2 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['tb'];?> Cm
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Alamat Siswa</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['alamat'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Jarak Ke Sekolah</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['jarak'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['telepon'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['email'];?>
                                </div>
                            </div>
                            <?php } ?>

                            <?php foreach ($ayah as $list_ayah) { ?>
                            <hr><h4>DATA AYAH KANDUNG</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['nama'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['agama'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['ttl'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['pend_terakhir'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['pekerjaan'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['penghasilan'];?>
                                </div>
                            </div><hr> <?php } ?>
                            
                            
                            <?php foreach ($ibu as $list_ibu){ ?>
                            <hr><h4>DATA IBU KANDUNG</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['nama'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['agama'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['ttl'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['pend_terakhir'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['pekerjaan'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['penghasilan'];?>
                                </div>
                            </div><hr> <?php }?>

                            <?php foreach ($wali as $list_wali){ ?>
                            <hr><h4>DATA WALI</h4><hr> 
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Wali</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_wali['nama'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_wali['agama'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_wali['ttl'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_wali['pend_terakhir'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_wali['pekerjaan'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_wali['penghasilan'];?>
                                </div>
                            </div> <?php }?>

                       
                            <!--<hr><h4>4. Keterangan Pendidikan</h4> 
                            <div>
                            <a type="button" id="baru" class="btn btn-success">Siswa Baru</a>
                            <a type="button" id="pindahan" class="btn btn-success">Siswa Pindahan</a><hr>
                            </div>
                            
                            <div id="formbaru" style="display:none;">
                            <p>Siswa Baru</p>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tingkat/Kelas</label>
                                <div class="col-sm-10">
                                <input name="kelassiswa" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Daftar</label>
                                <div class="col-sm-10">
                                <input name="tgldaftar" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Asal Sekolah</label>
                                <div class="col-sm-10">
                                <input name="asalsekolah" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nomor STTB</label>
                                <div class="col-sm-10">
                                <input name="nosttb" type="text" class="form-control">
                                </div>
                            </div><hr>
                        </div>
                            
                            <div id="formpindah" style="display:none;">
                            <p>Siswa Pindahan</p>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Daftar</label>
                                <div class="col-sm-10">
                                <input name="tglpindah" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Dari Sekolah</label>
                                <div class="col-sm-10">
                                <input name="asalpindah" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">No Surat Ketr. Pindah</label>
                                <div class="col-sm-10">
                                <input name="noketpindah" type="text" class="form-control">
                                </div>
                            </div>
                        </div>  -->  

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  
  </section>


</div>