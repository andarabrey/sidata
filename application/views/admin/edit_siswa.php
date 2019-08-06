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
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspUbah Data Siswa</h3>
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
                                <div class="col-sm-10">
                                <input name="namasiswa" type="text" class="form-control" value="<?php echo $list_siswa['nama'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                    <input required type="radio" name="jksiswa" id="inlineRadio1" value="Laki-laki"> Laki-laki
                                    </label>
                                    <label class="radio-inline">
                                    <input required type="radio" name="jksiswa" id="inlineRadio2" value="Perempuan"> Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="nisn" required type="text" class="form-control" value="<?php echo $list_siswa['id_siswa'];?>">
                                </div>
                                <label  class="col-sm-2 col-form-label">NEM</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="nem" required type="text" class="form-control" value="<?php echo $list_siswa['nem'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="ttlsiswa"  type="date" class="form-control" value="<?php echo $list_siswa['ttl'];?>">
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <select name="agamasiswa"  class="form-control" required>
                                    <option></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Berat Badan</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_siswa['bb'];?>" name="bb" type="number" min="20" max="1000" class="form-control"> <span>KG</span>
                                </div>
                                <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_siswa['tb'];?>" name="tb" type="number" min="70" max="300" class="form-control"> <span>CM</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Alamat Siswa</label>
                                <div class="col-sm-10">
                                <textarea name="alamatsiswa" rows="3" class="form-control"> <?php echo $list_siswa['alamat'];?> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Jenis Tinggal</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_siswa['tinggal'];?>" name="tinggal" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Jarak Ke Sekolah</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_siswa['jarak'];?>" name="jarak" type="number" min="1" max="100" class="form-control"> <span>KM</span>
                                </div>
                            </div>
                            <?php } ?>

                            <?php foreach ($ayah as $list_ayah) { ?>
                            <hr><h4>DATA AYAH KANDUNG</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                <input value="<?php echo $list_ayah['nama'];?>" name="namaayah" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_ayah['ttl'];?>" name="ttlayah" type="date" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <select required name="agamaayah" class="form-control">
                                    <option></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10">
                                <input value="<?php echo $list_ayah['pend_terakhir'];?>" name="lastpendayah" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_ayah['pekerjaan'];?>" name="pekerjaanayah" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_ayah['penghasilan'];?>" name="penghasilanayah" type="number" class="form-control">
                                </div>
                            </div><hr> <?php } ?>
                            
                            <hr><h4>DATA IBU KANDUNG</h4><hr>
                            <?php foreach ($ibu as $list_ibu){ ?>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                <input value="<?php echo $list_ibu['nama'];?>" name="namaibu" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_ibu['ttl'];?>" name="ttlibu" type="date" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <select required name="agamaibu" class="form-control">
                                    <option></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10">
                                <input value="<?php echo $list_ibu['pend_terakhir'];?>" name="lastpendibu" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_ibu['pekerjaan'];?>" name="pekerjaanibu" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_ibu['penghasilan'];?>" name="penghasilanibu" type="number" class="form-control">
                                </div>
                            </div><hr> <?php }?>

                            <?php foreach ($wali as $list_wali){ ?> 
                            <hr><h4>DATA WALI</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Wali</label>
                                <div class="col-sm-10">
                                <input value="<?php echo $list_wali['nama'];?>" name="namawali" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_wali['ttl'];?>" name="ttlwali" type="date" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <select required name="agamawali" class="form-control">
                                    <option></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10">
                                <input value="<?php echo $list_wali['pend_terakhir'];?>" name="lastpendwali" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_wali['pekerjaan'];?>" name="pekerjaanwali" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <input value="<?php echo $list_wali['penghasilan'];?>" name="penghasilanwali" type="number" class="form-control">
                                </div>
                            </div> <?php }?>

                            <button type="submit" style="float:right; " class="btn btn-info btn-lg"> Simpan </button>
                            <button type="reset" style="float:right; margin-right:20px;" class="btn btn-danger btn-lg"> Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  
  </section>


</div>