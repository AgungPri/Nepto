<h2>Hapus Pelanggan</h2>
<?php 
	$koneksi->query("DELETE FROM pelanggan_lama WHERE id_pelanggan_lama='$_GET[id]'");

	echo "<script>alert('pelanggan terhapus');</script>";
	echo "<script>location='index.php?halaman=pelanggan_lama';</script>"
 ?>