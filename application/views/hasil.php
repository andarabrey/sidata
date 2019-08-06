<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home | Perpustakaan Teknik</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assehts/img/hadoop.png" type="image/x-icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/datatables/datatables.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/home.css">

	<!--<link href="assets/css/search.css" rel="stylesheet">-->

</head>
<body>
<nav class="navbar navbar-default" style="background-color:#3C8DBC; border-radius:0px; margin-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:white;">
        SMPN17
      </a>
    </div>
  </div>
</nav>

	<div class="container wrapsearch" style="background-color: #fefefe; border: 1px solid #f5f5f5; min-height:100vh" >
		<br>
		<div class="row">
			<div class="col-md-2 col-md-offset-5 col-xs-2 col-xs-offset-5 ">
				<img align="center" src="<?php echo base_url();?>/assets/img/logo.png" class="img-responsive" alt="Responsive image">
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
				<hr>
				<h2 align="center">Lihat Kelas</h2>
				<hr>
			</div>
		</div>
		<br>



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered table-hover table-striped"  cellspacing="0" width="100%" id="myTable">
                        <thead>
                          <tr>
                            <th width="10%">No</th>
                            <th width="40%">Nama Kelas</th>
                            <th width="21%">Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach ($kelas as $list) {?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $list['nama_kelas']; ?></td>
                            <td>
                                <a class="btn btn-xs btn-success" style="margin : 0px 10px 0px 10px" href="<?php echo base_url(); ?>home/detail/<?php echo $list['id_kelas']; ?>">Detail</a>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                      <a style="float:right" type="button" class="btn btn-info" href="<?php echo base_url(); ?>home">Kembali</a>
        </div>
    </div>

	</div>
 </div>


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

	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
