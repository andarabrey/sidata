<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      MENEJEMEN BUKU
      <small></small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">

                <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspData Buku</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
                  <a target="" href="#" class="btn btn-primary pull-right" style="margin-right: 5px; margin-left: 5px;" data-toggle="modal" data-target="#exampleModal">Tambah Buku</a>
                  <a target="" href="#" class="btn btn-primary pull-right" style="margin-right: 5px; margin-left: 5px;" data-toggle="modal" data-target="#modalKategori">Tambah Kategori</a>
                  <a target="" href="#" class="btn btn-primary pull-right" style="margin-right: 5px; margin-left: 5px;" data-toggle="modal" data-target="#modalTipe">Tambah Tipe</a>
                </div>

          <div class="box-body">
            <table class="table table-bordered table-hover table-striped" cellspacing="0" width="100%" id="myTable">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="30%">Judul</th>
                  <th width="">Penulis</th>
                  <th width="13%">Tahun Terbit</th>
                  <th width="">Type</th>
                  <th width="">Kategori</th>
                  <th width="">Penerbit</th>
                  <th width="">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach($buku as $list_buku){ ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $list_buku['judul'] ?></td>
                  <td><?php echo $list_buku['penulis'] ?></td>
                  <td><?php echo $list_buku['tahun_terbit'] ?></td>
                  <td><?php echo $list_buku['type'] ?></td>
                  <td><?php echo $list_buku['kategori'] ?></td>
                  <td><?php echo $list_buku['penerbit'] ?></td>
                  <td><a href="<?php echo base_url() ?>/admin/buku/hapus_buku/<?php echo $list_buku['id_buku'] ?>" class="btn btn-xs btn-danger demo-buku" data-toggle="confirmation">Hapus</a> <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modalEdit_<?php echo $list_buku['id_buku'] ?>">Edit</button> </td>

                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Form Tambah Buku</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/buku/tambah">
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Judul</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nama" placeholder="Judul Buku" name="judul" onkeyup="loadusername();" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Penulis</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="username" placeholder="Nama Penulis" name="penulis">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Tahun Terbit</label>
                <div class="col-sm-9">
                  <input type="number" min="1000" max="9999" class="form-control" id="username" placeholder="Tahun Penerbitan" name="tahun">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Type</label>
                <div class="col-sm-9">
                  <select class="form-control" name="type">
                    <?php foreach($tipe as $list_tipe01){ ?>
                    <option><?php echo $list_tipe01['tipe'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Kategori</label>
                <div class="col-sm-9">
                  <select class="form-control" name="kategori">
                    <?php foreach($kategori as $list_kategori01){ ?>
                    <option><?php echo $list_kategori01['kategori'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Penerbit</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="username" placeholder="Penerbit" name="penerbit">
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

<?php foreach ($buku as $list_buku01) { ?>
<div class="modal fade" id="modalEdit_<?php echo $list_buku01['id_buku'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Form Edit Buku</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/buku/edit_buku/<?php echo $list_buku01['id_buku'] ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Judul</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nama" placeholder="Judul Buku" name="judul" autocomplete="off" value="<?php echo $list_buku01['judul'] ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Penulis</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="username" placeholder="Nama Penulis" name="penulis" value="<?php echo $list_buku01['penulis'] ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Tahun Terbit</label>
                <div class="col-sm-9">
                  <input type="number" min="1000" max="9999" class="form-control" id="username" placeholder="Tahun Penerbitan" name="tahun" value="<?php echo $list_buku01['tahun_terbit'] ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Type</label>
                <div class="col-sm-9">
                  <select class="form-control" name="type">
                    <?php foreach($tipe as $list_tipe01){ ?>
                    <option style="font-weight: <?php if($list_buku01['type']==$list_tipe01['tipe']){ echo "bold"; } ?>" <?php if($list_buku01['type']==$list_tipe01['tipe']){ echo "selected"; } ?>><?php echo $list_tipe01['tipe'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Kategori</label>
                <div class="col-sm-9">
                  <select class="form-control" name="kategori">
                    <?php foreach($kategori as $list_kategori01){ ?>
                    <option style="font-weight: <?php if($list_buku01['kategori']==$list_kategori01['kategori']){ echo "bold"; } ?>" <?php if($list_buku01['kategori']==$list_kategori01['kategori']){echo "selected"; } ?>><?php echo $list_kategori01['kategori'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Penerbit</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="username" placeholder="Penerbit" name="penerbit" value="<?php echo $list_buku01['penerbit'] ?>">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
</div>
<?php } ?>

<div class="modal fade" id="modalTipe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Menejemen Tipe Buku</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/buku/tambah_tipe">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Tipe Buku</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="nama" placeholder="Tipe Buku" name="tipe" autocomplete="off">
              </div>
              <button type="submit" class="btn btn-info ">Tambah</button>
            </div>
          </div>
          <!-- /.box-footer -->
        </form>
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tipe</th>
                <th width="20%">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php $num=1; foreach($tipe as $list_tipe){ ?>
              <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $list_tipe['tipe'] ?></td>
                <td><button class="btn btn-xs btn-warning" id="" onclick="showEdit_tipe(<?php echo $list_tipe['id_tipe'] ?>)">Edit</button> <a href="<?php echo base_url() ?>/admin/buku/hapus_tipe/<?php echo $list_tipe['id_tipe'] ?>" class="btn btn-xs btn-danger" data-toggle="confirmation">Hapus</a></td>
              </tr>
              <tr id="divEdit-tipe<?php echo $list_tipe['id_tipe'] ?>" class="edit_tipe" style="display: none;">
                <td><?php echo $num++; ?></td>
                <form method="post" action="<?php echo base_url(); ?>admin/buku/update_tipe/<?php echo $list_tipe['id_tipe'] ?>">
                  <td><input type="text" name="tipe" value="<?php echo $list_tipe['tipe'] ?>"></td>
                  <td><button type="submit" class="btn btn-xs btn-warning">Update</button> <button type="button" class="btn btn-xs btn-warning" onclick="showEdit_tipe(<?php echo $list_tipe['id_tipe'] ?>)">X</button></td>
                </form>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
</div>

<div class="modal fade" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Menejemen Kategori Buku</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/buku/tambah_kategori">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Tipe Buku</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="nama" placeholder="kategori Buku" name="kategori" autocomplete="off">
              </div>
              <button type="submit" class="btn btn-info ">Tambah</button>
            </div>
          </div>
          <!-- /.box-footer -->
        </form>
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>kategori</th>
                <th width="20%">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php $num=1; foreach($kategori as $list_kategori){ ?>
              <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $list_kategori['kategori'] ?></td>
                <td><button class="btn btn-xs btn-warning" onclick="showEdit_kategori(<?php echo $list_kategori['id_kategori'] ?>)">Edit</button> <a href="<?php echo base_url() ?>admin/buku/hapus_kategori/<?php echo $list_kategori['id_kategori'] ?>" class="btn btn-xs btn-danger" data-toggle="confirmation">Hapus</a></td>
              </tr>
              <tr id="divEdit-kategori<?php echo $list_kategori['id_kategori'] ?>" style="display: none;">
                <td><?php echo $num++; ?></td>
                <form method="post" action="<?php echo base_url(); ?>admin/buku/update_kategori/<?php echo $list_kategori['id_kategori'] ?>">
                  <td><input type="text" name="kategori" value="<?php echo $list_kategori['kategori'] ?>"></td>
                  <td><button type="submit" class="btn btn-xs btn-warning">Update</button> <button type="button" class="btn btn-xs btn-warning" onclick="showEdit_kategori(<?php echo $list_kategori['id_kategori'] ?>)">X</button></td>
                </form>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
</div>