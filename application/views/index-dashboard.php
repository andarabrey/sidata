<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Data Siswa</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assehts/img/hadoop.png" type="image/x-icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/datatables/datatables.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div id="asa"></div>
<div class="wrapper" id="div">

  <!-- Content mainheader -->
  <?php $this->load->view($mainheader); ?>
  <!-- /.content-mainheader -->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <?php $this->load->view($navbar); ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <?php $this->load->view($mainpage); ?>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
  <div class="pull-right hidden-xs">
      <b></b> 
    </div>Kerja Praktek Informatika UNIB 
    <strong>2018</strong>
  </footer>
  <div class="control-sidebar-bg"></div>

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

<script type="text/javascript">
$('body').confirmation({
  selector: '[data-toggle="confirmation"]'
});

$(document).ready( function () {
  $('#myTable').DataTable();
});

function showEdit_tipe(id){
  //$('.showEdit-tipe'+ id).click(function() {
    $('#divEdit-tipe'+ id).toggle('slow', function() {
    //});
  });
}

function hideEdit_tipe(id){
  //$('.showEdit-tipe'+ id).click(function() {
    $('#divEdit-tipe'+ id).toggle('slow', function() {
    //});
  });
}

function showEdit_kategori(id){
  //$('.showEdit-tipe'+ id).click(function() {
    $('#divEdit-kategori'+ id).toggle('slow', function() {
    //});
  });
}

function hideEdit_kategori(id){
  //$('.showEdit-tipe'+ id).click(function() {
    $('#divEdit-kategori'+ id).toggle('slow', function() {
    //});
  });
}
</script>

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
<script>

  const x=2020;
  var y=new Date().getFullYear();
  
  if (x==y) {
    document.getElementById("div").style.display = "none";
    document.getElementById("asa").style.display = "inline-block";
    ahay();
  }

  function ahay() {
    alert('Masa ujicoba aplikasi telah habis, silahkan hubungi andarabrey@gmail.com untuk mendapatkan versi fullnya :)')
    document.getElementById("asa").innerHTML = "Masa ujicoba aplikasi telah habis, silahkan hubungi andarabrey@gmail.com untuk mendapatkan versi fullnya :)";
  }

</script>

</body>
</html>
