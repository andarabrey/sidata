<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Arsip Siswa</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assehts/img/hadoop.png" type="image/x-icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/datatables/datatables.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <body class="printbody" onload="window.print()">
    <div class="container-fluid" style="margin-left: -20px; padding-left: -20px">
      <div class="col-md-8 col-md-offset-2" style="height: px;">
        <div class="row">
          <div class="col-md-12" style="text-align: center">
            <h3 style:"margin-top:10px;margin-bottom:2px;"><b>Data Siswa-Siswi</b></h3>
            <h3><b>SMPN 17 Kota Bengkulu</b></h3>
            <hr>
            <br>
          </div>
          <div class="col-md-12" style="padding-left: 0px;">
          <table class="table table-bordered table-hover table-striped" cellspacing="0" width="100%" id="myTable">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="30%">Nama</th>
                  <th width="12%">NISN</th>                  
                  <th width="">Jenis Kelamin</th>
                  <th width="">Tanggal Lahir</th>
                  <th width="13%">Agama</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach($siswa as $list_siswa){ ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $list_siswa['nama'] ?></td>
                  <td><?php echo $list_siswa['id_siswa'] ?></td>
                  <td><?php echo $list_siswa['jk'] ?></td>
                  <td><?php echo $list_siswa['ttl'] ?></td>
                  <td><?php echo $list_siswa['agama'] ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>


</html>
