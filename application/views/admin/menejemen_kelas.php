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
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspData Kelas</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
                  <a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target="#exampleModal">Tambah Kelas</a>
                </div>

                <div class="box-body">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="row">
                        <table class="table table-bordered table-hover table-striped"  cellspacing="0" width="100%" id="myTable">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th width="40%">Nama Kelas</th>
                              <th width="24%">Opsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1; foreach ($kelas as $list_kelas) { ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $list_kelas['nama_kelas']; ?></td>
                              <td>
                              <a class="btn btn-xs btn-danger" style="margin : 0px 10px 0px 10px" href="<?php echo base_url(); ?>admin/kelas/hapus/<?php echo $list_kelas['id_kelas']; ?>" data-toggle="confirmation">Hapus</a>
                              <a class="btn btn-xs btn-warning" href="#" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $list_kelas['id_kelas'] ?>">Edit</a>
                              <a class="btn btn-xs btn-success" style="margin : 0px 10px 0px 10px" href="<?php echo base_url(); ?>admin/kelas/detail/<?php echo $list_kelas['id_kelas']; ?>">Detail</a>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Daftar User Baru</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/kelas/tambah_kelas">
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nama Kelas</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="namakelas" placeholder="Nama Kelas" name="namakelas">
                </div>
              </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Tambah</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
</div>

<?php foreach ($kelas as $list_kelas02) { ?>
<div class="example-modal modal fade bs-example-modal-sm<?php echo $list_kelas02['id_kelas'] ?>" id="modal-register" data-focus-on="input:first" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
  <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="box-body">
          <div class="box-header with-border">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspEdit Kelas</h4>
          </div>

          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/kelas/update/<?php echo $list_kelas02['id_kelas']; ?>/">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                      <input type="" class="form-control" id="kual" name="namakelas" value="<?php echo $list_kelas02['nama_kelas']; ?>">
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
<?php } ?>

