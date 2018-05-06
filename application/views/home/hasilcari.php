<div class="row">

  			<div class="col-md-12 wrap" style="min-height: 60vh ;">
  				<h4 style="margin-top: 20px;">Hasil Pencarian</h3>
          <hr>
            <table class="table col-md-10 offset-md-1 table-bordered table-hover table-responsive-sm table-striped" cellspacing="0" width="100%" id="myTable">
              <thead>
                <tr>
                  <th width="30%">Judul</th>
                  <th width="">Penulis</th>
                  <th width="13%">Tahun Terbit</th>
                  <th width="">Type</th>
                  <th width="">Kategori</th>
                  <th width="">Penerbit</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach($cari as $list_buku){ ?>
                <tr>
                <?php if($this->session->userdata('nama') != ""){ ?>
                  <td><a target="blank" href="<?php echo base_url() ?>upload/<?php echo $list_buku->file ?>"><?php echo $list_buku->judul ?></a></td>
                  <?php } ?>

                  <?php if($this->session->userdata('nama') == ""){ ?>
                  <td><a href="#" onclick="alert('Login terlebih dulu untuk mendownload file')"><?php echo $list_buku->judul ?></a></td>
                  <?php } ?>
                  <td><?php echo $list_buku->penulis ?></td>
                  <td><?php echo $list_buku->tahun_terbit ?></td>
                  <td><?php echo $list_buku->type?></td>
                  <td><?php echo $list_buku->kategori ?></td>
                  <td><?php echo $list_buku->penerbit ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
  			</div>
        </div>
  			