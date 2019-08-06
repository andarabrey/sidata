<html>
  <head>
  	<meta charset="utf-8">
  	<title>Login | Perpustakaan Teknik</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  	<link href="assets/css/login.css" rel="stylesheet">
  	<!--<link href="assets/css/search.css" rel="stylesheet">-->
  	<script src="assets/js/jquaery.js"></script>
  	<script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/login.js"></script>
  </head>

  <body style="background-image: url('<?php echo base_url();?>assets/img/x.jpg'); background-size: cover;">
    <div class="container positioncenter">
        <div class="login-container">
        <img class="img-responsive center-block" style="max-height: 150px;" src="<?php echo base_url();?>assets/img/logos.png" alt=""><br><br>
          <div id="output"></div>
          <div class="form-box">
            <form action="<?php echo base_url();?>login/aksi_login" method="post">
                <input name="username" type="text" placeholder="username" autocomplete="off" autofocus="on" required>
                <input name="password" type="password" placeholder="password" autocomplete="off" required>
                <div class="form-group">
                  <a href="<?php echo base_url();?>"><button class="col-md-4 col-sm-4 btn btn-danger login" type="button" >Back</button></a>
                  <button class="btn col-md-7 col-sm-7 col-sm-offset-1 col-md-offset-1 btn-success login" type="submit" >Login</button>
                </div>
            </form>
          </div>
          <h2><?php echo $this->session->flashdata('message');?></h2> <?php echo $this->session->flashdata('message');?>
        </div>

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
</html>
