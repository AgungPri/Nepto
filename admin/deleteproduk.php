<?php

$aroma2 = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$aroma  = $aroma2->fetch_assoc();
$fotoproduk =$aroma['fotoproduk'];
if(file_exists("../foto_produk/$fotoproduk"))
{
	unlink("../foto_produk/$fotoproduk");
}

$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");

	echo "<script>alert('produk terhapus');</script>";
	echo "<script>location='index.php?halaman=produk';</script>"
 ?>