<h2>ubah pelanggan</h2>
<?php 
	$aroma2=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
	$aroma =$aroma2->fetch_assoc();

echo "<pre>";
print_r($aroma);
echo "</pre>";

 ?>
 <form method="post" enctype="multipart/form-data">
 	<div class="form-group">
 		<label>Username</label>
 		<input type="text" name="email" class="form-control" value="<?php echo $aroma ['email_pelanggan']?>;">
 	</div>
 	<div class="form-group">
 		<label for="">Password Pelanggan</label>
 		<input type="password" name="password" class="form-control" id="myinput" value="<?php echo $aroma['password_pelanggan']; ?>">
 		<input type="checkbox" onclick="myFunction()">Show Password
 	</div>
 	<div class="form-group">
 		<label>Nama Pelanggan</label>
 		<input type="text" name="nama" class="form-control" value="<?php echo $aroma ['nama_pelanggan']?>;">
 	</div>
 	<div class="form-group">
 		<label>Telepon Pelanggan</label>
 		<input type="text" name="telepon" class="form-control" value="<?php echo $aroma ['telepon_pelanggan']?>;">
 	</div>
 	<div class="form-group">
 		<label>Alamat Pelanggan</label>
 		<input type="text" name="alamat" class="form-control" value="<?php echo $aroma ['alamat_pelanggan']?>;">
 	</div>
 	<div class="form-group">
 		<label>Domain_Pelanggan</label>
 		<input type="text" name="domain" class="form-control" value="<?php echo $aroma ['domain_pelanggan']?>;">
 	</div>
 	<button class="btn btn-warning" name="ubah">Ubah</button>
 </form>
 <?php 
if (isset($_POST['ubah'])) 
{	
        $koneksi->query("UPDATE pelanggan SET 
        email_pelanggan='$_POST[email]',
		password_pelanggan='$_POST[password]',
		nama_pelanggan='$_POST[nama]',
		telepon_pelanggan='$_POST[telepon]',
		alamat_pelanggan='$_POST[alamat]',
		domain_pelanggan='$_POST[domain]' WHERE id_pelanggan='$_GET[id]'");

	
		echo "<script>alert('Data Berhasil Di ubah');</script>";
		echo "<script>location='index.php?halaman=pelanggan';</script>";
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
