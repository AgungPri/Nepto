<h2>Tambah Pembelian Offline</h2>
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">Nama Produk</label>
		<input type="text" class="form-control" name="produk">
	</div>
	<div class="form-group">
		<label for="">Jumlah Produk</label>
		<input type="text" class="form-control" name="jumlah">
	</div>
	<div class="form-group">
		<label for="">Harga Total</label>
		<input type="text" class="form-control" name="total">
	</div>
	<div class="form-group">
		<label for="">Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label for="">Password Pelanggan</label>
		<input type="password" class="form-control" name="password" id="myinput">
		<input type="checkbox" onclick="myFunction()">Show Password
	</div>
	<div class="form-group">
		<label for="">Tanggal Dan Waktu </label>
		<input type="datetime-local" class="form-control" name="date">
	</div>
	<button class="btn btn-primary" name="tambah">Tambah
	</button>
</form>
<?php 
if (isset($_POST['tambah'])) 
{
	$koneksi->query("INSERT INTO pembelian_offline(nama_produk,jumlah_produk,total_harga_pembelian,nama_pelanggan,password_pelanggan,jam) VALUES ('$_POST[produk]','$_POST[jumlah]','$_POST[total]','$_POST[nama]','$_POST[password]','$_POST[date]')");
	echo "<script>alert('Data Berhasil Di Tambah');</script>";
	echo "<script>location='index.php?halaman=pembelian_offline';</script>";
}
 ?>
 <script type="text/javascript">
 function myFunction() 
 {
   var x = document.getElementById("myinput");
	  if (x.type === "password")
	   {
	    x.type = "text";
	  } 
	  else 
	  {
	    x.type = "password";
	  }
 }
</script>