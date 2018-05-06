	<div class="row d-none d-md-flex">
  			<div class="col-md-2 offset-md-2 col-sm-2 offset-sm-1 col-2 offset-1">
  				<img class="img-fluid" src="<?php echo base_url();?>assets/img/j4.png">
  				<h3 class="" align="center"> Jurnal </h3>
  			</div>
  			<div class="col-md-2 offset-md-1 col-sm-2 offset-sm-2 col-2 offset-2">
  				<img class="img-fluid" src="<?php echo base_url();?>assets/img/ta1.png">
  				<h3 class="" align="center"> Tugas Akhir </h3>
  			</div>
  			<div class="col-md-2 offset-md-1 col-sm-2 offset-sm-2 col-2 offset-2">
  				<img class="img-fluid" src="<?php echo base_url();?>assets/img/b1.png">
  				<h3 class="" align="center"> E-Book </h3>
  			</div>
  		</div>

  		<br class="d-none d-md-flex">

  		<div class="row">
  			<div class="col-md-8 wrap" style="height: 80vh auto;">
  				<h4 style="margin-top: 20px;">Koleksi Terbaru</h3>
          <hr>
            <table class="table table-bordered table-hover table-striped table-responsive-sm" cellspacing="0" width="100%" id="myTable">
              <thead>
                <tr>
                  <th width="40%">Judul</th>
                  <th width="">Penulis</th>
                  <th width="13%">Tahun Terbit</th>
                  <th width="">Type</th>
                  <th width="">Kategori</th>
                  <th width="">Penerbit</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach($buku as $list_buku){ ?>
                <tr>
                  <?php if($this->session->userdata('nama') != ""){ ?>
                  <td><a target="blank" href="<?php echo base_url() ?>upload/<?php echo $list_buku['file'] ?>"><?php echo $list_buku['judul'] ?></a></td>
                  <?php } ?>

                  <?php if($this->session->userdata('nama') == ""){ ?>
                  <td><a href="#" onclick="alert('Login terlebih dulu untuk mendownload file')"><?php echo $list_buku["judul"] ?></a></td>
                  <?php } ?>
                  <td><?php echo $list_buku['penulis'] ?></td> 
                  <td><?php echo $list_buku['tahun_terbit'] ?></td>
                  <td><?php echo $list_buku['type'] ?></td>
                  <td><?php echo $list_buku['kategori'] ?></td>
                  <td><?php echo $list_buku['penerbit'] ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
  			</div>
  			<div class="col-md-3 offset-md-1 wrap" style="height: 80vh auto;">
  				<h4 style="margin-top: 20px;">Semua Kategori</h3>
  				<hr>
          <?php $no=1; foreach($kategori as $list_buku){ ?>
  				<ul>
				   <li><a href="#"><?php echo $list_buku['kategori'] ?></a></li>
				</ul>
        <?php } ?>
  			</div>
  		</div>