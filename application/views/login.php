<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/hadoop.png" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style-login.css">
</head>
<body>
  <div class="login-page" style="margin-top:50px">
  <div class="form">
    <form class="login-form" method="post" action="<?php echo base_url();?>Login/aksi_login">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button>login</button>
    </form>
  </div>
</div>
  <script src='<?php echo base_url(); ?>assets/other/jquery/dist/jquery.min.js'></script>
  <script  src="<?php echo base_url() ?>assets/js/login.js"></script>
</body>
</html>
