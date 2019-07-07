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
					<li><a href="Bersuci">Order</a></li>
					<li><a href="Produk">Produk</a></li>
					<li><a href="About">About</a></li>
					 <?php echo $this->session->userdata('email'); ?>

					<!-- <li><a href="Login">Login</a></li> -->
					<li><a href="Login">Logout</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>