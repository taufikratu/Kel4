<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Khaira Sablon</title>

	<link rel="shortcut icon" href=<?php echo base_url ("assets/images/sasa.png");?>>
	
	<!-- Bootstrap -->
	<link href=<?php echo base_url ("assets/css/bootstrap.no-icons.min.css"); ?> rel="stylesheet">
	<!-- Icons -->
	<link href=<?php echo base_url ("assets/css/font-awesome.css"); ?> rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href=<?php echo base_url ("assets/css/family.css"); ?>>
	<!-- Custom styles -->
	<link rel="stylesheet" href=<?php echo base_url ("assets/css/styles.css"); ?>>

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body>

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<span class="title">Khaira Sablon</span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
			<ul class="nav navbar-nav">
					<li class="active"><a href="Home">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Order <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url ('orderkaos');?>">KAOS</a></li>
							<li><a href="<?php echo base_url ('orderjaket');?>">JAKET</a></li>
							<li><a href="<?php echo base_url ('orderolahraga');?>">OLAHRAGA</a></li>
						</ul>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url ('produkkaos');?>">KAOS</a></li>
							<li><a href="<?php echo base_url ('produkjaket');?>">JAKET</a></li>
							<li><a href="<?php echo base_url ('produkolahraga');?>">OLAHRAGA</a></li>
						</ul>
					</li>
					<li><a href="About">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('email'); ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url ('Login/logout');?>">logout</a></li>
						</ul>
					</li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>