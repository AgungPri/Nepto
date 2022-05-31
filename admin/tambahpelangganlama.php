<h2>Tambah Pelanggan Lama</h2>
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label for="">Alamat Pelanggan</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label for="">Number Phone</label>
		<input type="number" class="form-control" name="nomor">
	</div>
	<button class="btn btn-primary" name="tambah">Tambah
	</button>
</form>
<?php 
if (isset($_POST['tambah'])) 
{
	$koneksi->query("INSERT INTO pelanggan_lama(nama_pelanggan,alamat_pelanggan,number_phone) VALUES ('$_POST[nama]','$_POST[alamat]','$_POST[nomor]')");
	echo "<script>alert('Data Berhasil Di Tambah');</script>";
	echo "<script>location='index.php?halaman=pelanggan_lama';</script>";
}
 ?>
