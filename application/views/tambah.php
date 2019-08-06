<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/datatables/datatables.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/home.css">
    <title>Daftar</title>
</head>
<body>
<nav class="navbar navbar-default" style="background-color:#3C8DBC; border-radius:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:white;">
        SMPN17
      </a>
    </div>
  </div>
</nav>
<div class="container">
<section class="content-header">
    <h1>
      PENDAFTARAN SISWA
      <br>
      <small></small>
    </h1>
  </section>

  <section class="context">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspRegistrasi</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <form method="post" action="<?php echo base_url();?>/home/tambah_siswa">
                        <h4>IDENTITAS PESERTA DIDIK</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                <input name="namasiswa" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                    <input type="radio" name="jksiswa" id="inlineRadio1" value="Laki-laki"> Laki-laki
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="jksiswa" id="inlineRadio2" value="Perempuan"> Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="nisn" type="text" class="form-control" required>
                                </div>
                                <label  class="col-sm-2 col-form-label">NEM</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="nem" type="number" step="0.01" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="ttlsiswa"  type="date" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <select name="agamasiswa"  class="form-control">
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
                                <input name="bb" type="number" min="20" max="1000" class="form-control"> <span>KG</span>
                                </div>
                                <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="tb" type="number" min="70" max="300" class="form-control"> <span>CM</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Alamat Siswa</label>
                                <div class="col-sm-10">
                                <textarea name="alamatsiswa" rows="3" class="form-control"> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Jenis Tinggal</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="tinggal" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Jarak Ke Sekolah</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="jarak" type="number" min="1" max="100" class="form-control"> <span>KM</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="telepon" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="email" type="email" class="form-control">
                                </div>
                            </div>

                            <hr><h4>DATA AYAH KANDUNG</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                <input name="namaayah" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="ttlayah" type="date" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <select name="agamaayah" class="form-control">
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
                                <input name="lastpendayah" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="pekerjaanayah" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="penghasilanayah" type="number" class="form-control">
                                </div>
                            </div>

                            <hr><h4>DATA IBU KANDUNG</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                <input name="namaibu" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="ttlibu" type="date" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <select name="agamaibu" class="form-control">
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
                                <input name="lastpendibu" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="pekerjaanibu" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="penghasilanibu" type="number" class="form-control">
                                </div>
                            </div>

                            <hr><h4>DATA WALI</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Wali</label>
                                <div class="col-sm-10">
                                <input name="namawali" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="ttlwali" type="date" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 col-md-4">
                                <select name="agamawali" class="form-control">
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
                                <input name="lastpendwali" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="pekerjaanwali" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="penghasilanwali" type="number" class="form-control">
                                </div>
                            </div><hr>

                       
                            <button type="submit" style="float:right; " class="btn btn-info btn-lg"> Simpan </button>
                            <button type="reset" style="float:right; margin-right:20px;" class="btn btn-danger btn-lg"> Reset</button>
                        </form> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  </div>
</body>
<script src="<?php echo base_url(); ?>/assets/other/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/datatables/datatables.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/pages/dashboard2.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/bs-confirmation-master/bootstrap-confirmation.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#baru").click(function () {
            $("#formbaru").show("slow");
            $("#formpindah").hide("slow");
        });
    });

    $(document).ready(function () {
        $("#pindahan").click(function () {
            $("#formpindah").show("slow");
            $("#formbaru").hide("slow");
        });
    });



                                
</script>
</html>