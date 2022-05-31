<?php 
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","aromatoko");

if (!isset($_SESSION['admin'])) 
{
  header('location:login.php');
  exit();
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Cetak Pelanggan</title>
 	<link rel="stylesheet" href="assets/css/bootstrap.css">
 </head>
 <body>
		<h2 align="center">cetak pelanggan</h2>
<table class="table table-bordered">
	<thead bgcolor="silver">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Alamat</th>
		</tr>
	</thead>
	<tbody>
	<?php $number=1; ?>
		<?php $aroma2=$koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while($aroma = $aroma2->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $number; ?></td>
			<td><?php echo $aroma["nama_pelanggan"]; ?></td>
			<td><?php echo $aroma["email_pelanggan"]; ?></td>
			<td><?php echo $aroma["telepon_pelanggan"]; ?></td>
			<td><?php echo $aroma["alamat_pelanggan"]; ?></td>
		</tr>
	<?php $number++; ?>
	<?php } ?>
	</tbody>
</table> 	
 </body>
 </html>

<script>
	window.print();
</script>