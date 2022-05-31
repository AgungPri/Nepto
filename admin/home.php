<?php 
	$aroma2 = $koneksi->query("SELECT * FROM admin");
	$aroma = $aroma2->fetch_array();
 ?>
 <!-- <pre> -->
 	 <!-- PHP Code -->
 		<!-- #print_r($_SESSION); -->
 	 
<!-- </pre> -->
<h2>Selamat Datang Admin  <?php echo $aroma["username_admin"]; ?></h2>
<!-- <pre><?php #print_r($_SESSION); ?></pre> -->
<div class="row">
	<div class="container">
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
	<H4>Silahkan menggunakan fitur fitur dengan baik</H4>
</body>
</html>