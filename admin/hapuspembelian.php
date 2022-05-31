<h2>Hapus Pembelian Offline</h2>
<?php 
	$koneksi->query("DELETE FROM pembelian_offline WHERE id_pembelian_ofline='$_GET[id]'");

	echo "<script>alert('pelanggan terhapus');</script>";
	echo "<script>location='index.php?halaman=pembelian_offline';</script>"
 ?>