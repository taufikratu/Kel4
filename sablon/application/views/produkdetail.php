<main id="main">

	<div class="container">

		<div class="row topspace">

			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title"><?php echo $this->session->userdata('namabaju'); ?></h1>
				</header>

				<p><img src="assets/images/s2.jpg" alt=""></p>

				<p>deskripsi</p>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-left">

				<div class="widget">
				<p>Pilih ukuran baju:<br></p>
      <div class="form-check">
  			<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="s" checked>S (P:62cm L:42cm) <br></input><br>
  			<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="m" >M (P:66cm L:46cm) <br></input><br>
  			<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="l" >L (P:70cm L:50cm) <br></input><br>
 			 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="xl" >XL (P:72cm L:52cm) <br></input><br>
 	</div>

  
	</div>
        <p>Jumlah:<br>
        <input type="number" name="kuantiti" id="kuantiti">
        <p>
        	<button class='btn btn-primary' type="submit" name="submit">BELI</button>
        </p>
				</div>  

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->