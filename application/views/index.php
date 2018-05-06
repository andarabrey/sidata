<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library Teknik Informatika UNIB</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-reboot.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css?family=Anton|Oswald');

    	h1, h2, h3{
    		font-family: 'Anton', sans-serif;
    	}

		th{
			font-family: 'Anton', sans-serif;
			font-weight: normal;
			font-size: 14px;
		}

    	body{
			font-family: 'Oswald', sans-serif;
			font-size: 13px;
    	}

    	.tex{
    		background-image: url("<?php echo base_url();?>assets/img/cream-pixels.png");
    	}

    	.body{
    		background-image: url("<?php echo base_url();?>assets/img/climpek.png");
    		

    		background-color: /*#DDCBB3 #d2e5ef*/  #F9F9F9;
    		height: 100vh;
    	}

    	.wrap{
    		/*background-image: url("<?php echo base_url();?>assets/img/bg.png");
    		background-repeat: no-repeat;*/

    		background-color: /*#DDCBB3*/ #FCFCFC;
    		border: 1px solid #ededed;
  			border-radius: 3px;
				
    	}

    	.sq{
    		border-radius: 0px;
    	}

		.footer {
			margin-top: 20px;
			width: 100%;
			height: 42px;
		}

		.hid{
			display:none;
			color:white;
		}
    </style>

  </head>
  <body class="body">

  <nav class="tex navbar d-block d-sm-none sticky-top navbar-dark" style="background-color: #2e8676 /*#FF8C00*/	">
  		<a class="navbar-brand" href="<?php echo base_url(); ?>">ELIB-TI</a>
	</nav>

	<nav class="d-none d-sm-flex tex navbar sticky-top navbar-dark"  style="max-height:600px;background-color:#2e8676 /* #C2623A #FF8C00*/	">
		<a class="navbar-brand" href="<?php echo base_url()?>">ELIB-TI</a>
		<div>
		  	
		  <form <?php if($this->session->userdata('nama') != ""){echo 'style="display:none"' ?>
				<?php }?> class="form-inline my-2 my-lg-0" method="POST" action="<?php echo base_url().'login/aksi_login' ?>">
			<input class="sq form-control mr-sm-2" type="text" placeholder="Username" name="username">
			<input class="sq form-control mr-sm-2" type="password" placeholder="Password" name="password">
			<button class="sq btn btn-dark my-2 my-sm-0" style="background-color: #253B4B; " type="submit">Login</button>
		  </form>


			<div class="hid form-inline my-2 my-lg-0" <?php if($this->session->userdata('nama') != ""){echo 'style="display:block"' ?>>
				<form action="<?php echo base_url();?>login/logout">
					<h6 class="form-control sq my-2 my-lg-0" > <?php echo $this->session->userdata('nama'); ?> </h6>
					<button class="sq btn btn-dark my-2 my-sm-0" style="background-color: #253B4B; " type="submit">Logout</button>
				</form>
				</div>
			<?php }?>
		</div>
	</nav>
	  
	<br>
  	<div class="container-fluid">
  		<div class="row wrap" style="margin-top: -22px">
  			<div class="col-md-12">
				<h2 class="d-block d-md-none" style="text-align: center; margin-top: 20px;">E-LIBRARY INFORMATIKA UNIVERSITAS BENGKULU</h3>
  				<h1 class="d-none d-md-block" style="text-align: center; margin-top: 20px;">E-LIBRARY INFORMATIKA UNIVERSITAS BENGKULU</h1>
        </div>
      </div>
	  
	  	<form class="tex form-inline my-2 my-lg-0 <?php if($this->session->userdata('nama') == ""){echo 'd-block' ?>
				<?php } else echo 'd-none';?> d-sm-none" method="post" action="<?php echo base_url().'login/aksi_login' ?>">
			<div class="row">
				<input class="sq form-control mr-sm-2 col-5 offset-1" type="text" placeholder="Username" name="username">
				<input class="sq form-control mr-sm-2 col-5" type="password" placeholder="Password" name="password">
			<button class="sq btn btn-dark mr-sm-2 col-10 offset-1" style="background-color: #253B4B; " type="submit">Login</button>
			</div>
		</form>

		<form class="tex form-inline my-2 my-lg-0 <?php if($this->session->userdata('nama') != ""){echo 'd-block' ?>
				<?php } else echo 'd-none';?> d-sm-none" method="post" action="<?php echo base_url().'login/logout' ?>">
			<div class="row">
				<h6 class="form-control sq my-2 col-4 offset-2" > <?php echo $this->session->userdata('nama'); ?> </h6>
				<button class="sq btn btn-dark my-2 col-4" style="background-color: #253B4B; " type="submit">Logout</button>		
			</div>
		</form>


      <hr>
			<form method="get" action="<?php echo base_url().'home/cari' ?>">
			<div class="row">
				<div class="col-md-8 offset-md-2" style="baorder: 3px solid gray;">
					<input class="sq form-control form-control-lg" name='cari' type="text" placeholder="masukkan pencarian lalu klik enter">
				</div>
			</div>
			</form>
			<hr>
  			

  		


  		<br>
 
			<?php $this->load->view($content); ?>
  
  	</div>


 	<footer class="footer tex navbar-dark" style="background-color: #2e8676">
		<div class="container">
			<h6 style="display: block;
    text-align: center;
    padding-top: 13px;
    color: white;" class="form-inline my-2 my-lg-0">DEVELOPED BY <span><a style="color:wheat;" href="http://instagram.com/andarabrey" target="_blank">BA</a></span> & <span><a style="color:wheat;" target="_blank" href="http://instagram.com/yudhaniagara">YN</a></span></span> | 2018</h6>
		</div>
	</footer>
  </body>

<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>


</html>
