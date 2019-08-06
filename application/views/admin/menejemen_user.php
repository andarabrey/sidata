<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manajemen User
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
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspData User</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
                  <a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target="#exampleModal">Registrasi User</a>
                </div>

                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <table class="table table-bordered table-hover table-striped"  cellspacing="0" width="100%" id="table_user">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Opsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1; foreach ($data_user as $list_user) { ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $list_user['username']; ?></td>
                              <td><?php echo $list_user['password']; ?></td>
                              <td><a class="btn btn-xs btn-danger" style="margin : 0px 10px 0px 10px" href="<?php echo base_url(); ?>admin/user/hapus/<?php echo $list_user['id_user']; ?>" data-toggle="confirmation">Hapus</a><a class="btn btn-xs btn-warning" href="#" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $list_user['id_user'] ?>">Edit</a></td>
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
          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/user/registrasi_user">
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="username" placeholder="Nama" name="username">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="username" placeholder="Nama" name="password">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Daftar</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
</div>

<?php foreach ($data_user as $list_user02) { ?>
<div class="example-modal modal fade bs-example-modal-sm<?php echo $list_user02['id_user'] ?>" id="modal-register" data-focus-on="input:first" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
  <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="box-body">
          <div class="box-header with-border">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspEdit Data User</h4>
          </div>

          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/user/update/<?php echo $list_user02['id_user']; ?>/">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                      <input type="" class="form-control" id="kual" name="username" value="<?php echo $list_user02['username']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                      <input type="" class="form-control" id="kual" name="password" value="<?php echo $list_user02['password']; ?>">
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

