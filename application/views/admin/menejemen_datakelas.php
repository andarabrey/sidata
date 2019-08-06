<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manajemen Kelas
      <small></small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">

          <div class="box-body">
            <div class="row">
              <div class="col-md-12">

                <div class="box-header with-border">
                  <h2 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspData Siswa Kelas  <?php foreach ($namakelas as $key){ echo $key['nama_kelas'];} ?></h2>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
                  <a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target="#exampleModal">Tambah Siswa</a>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="row">
                        <table class="table table-bordered table-hover table-striped"  cellspacing="0" width="100%" id="myTable">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>NISN</th>
                              <th width="12%">Opsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1; foreach ($datakelas as $list_kelas) { ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $list_kelas['nama']; ?></td>
                              <td><?php echo $list_kelas['id_siswa']; ?></td>
                              <td>
                              <a class="btn btn-xs btn-danger" style="margin : 0px 10px 0px 10px" href="<?php echo base_url(); ?>admin/kelas/hapus_siswa/<?php echo $list_kelas['id_siswa']."/".$list_kelas['id_kelas']; ?>" data-toggle="confirmation">Hapus</a>
                              </td>
                            </tr>
                            
                          </tbody>
                          <?php } ?>
                        </table>
                        <?php $x=0; foreach ($datakelas as $list_kelas2) { $x=$list_kelas2['id_kelas']; } ?>
                        <hr style="margin-bottom:10px"> <a style="float:right; margin-top:0px" href="<?php echo base_url();?>admin/kelas/print/<?php echo $x; ?>" class="btn btn-danger">Cetak</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>

<!-- Button trigger modal -->


<!-- Modal -->

                                
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="box-body">
          <div class="box-header with-border">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspEdit Kelas</h4>
          </div>

          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/kelas/tambah_siswa/">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                <div class="form-group" style="display:none;"> 
                    <label for="" class="col-md-3 control-label">Id Kelas</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="idkelas" value="<?php echo $idk?>">                     
                     </div>
                  </div> 
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label">Nama</label>
                    <div class="col-md-9">
                        <select required name="idsiswa"  class="form-control" required>
                        <option value=""></option>
                        <?php foreach ($datasiswa as $list_kelas02) { ?>
                            <option value="<?php echo $list_kelas02['id_siswa']; ?>"><?php echo $list_kelas02['nama']; ?></option>
                        <?php } ?>
                        </select>
                     </div>
                  </div>               
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div> 


