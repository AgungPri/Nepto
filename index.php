<?php 
session_start();
//koneksi ke database
include 'koneksi.php';


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Neppto</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
<?php include'menu.php'; ?>

<!-- Konten -->

<section class="konten">
	<div class="container">
		 <h1>Daftar Produk Neppto</h1> 
		 <div class="row">
						
			<?php $aroma2=$koneksi->query("SELECT * FROM produk"); ?>
			<?php while($perproduk=$aroma2->fetch_assoc()){ ?>
		 	<div class="col-md-4" style="margin-bottom: 15px;">
		 		<div class="thumbnail">
		 			<img src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="">
		 			<div class="caption">
		 				<h3><?php echo $perproduk['nama_produk']; ?></h3>
		 				<h5><?php echo number_format($perproduk['harga_produk']); ?></h5>
		 				<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
		 				<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">Detail</a>
		 				<a href="https://api.whatsapp.com/send?phone=6281292239237" class="btn btn-primary">Pesan
                            Produk via wa</a>
		 			</div>
		 		</div>
		 	</div>
		 <?php } ?>


		 </div>
	</div>

</section>
	
</body>
</html>