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
				<p>Pilih ukuran baju:<br>
        <input type="radio" name="ukuran" value="s">S (P:62cm L:42cm) <br><input type="label"><br>
        <input type="radio" name="ukuran" value="m">M (P:66cm L:46cm) <br><input type="label"><br>
        <input type="radio" name="ukuran" value="l">L (P:70cm L:50cm) <br><input type="label"><br>
        <input type="radio" name="ukuran" value="XL">XL (P:72cm L:52cm) <input type="label"><br>  
        <p>Jumlah:<br>
        <input type="number" name="kuantiti">
        <p><button class='btn btn-primary'>BELI</button>
        </p>
				</div>  

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->