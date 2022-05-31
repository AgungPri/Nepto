<h2>Detail Pembelian</h2>
<?php 
 $aroma2 = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
	ON pembelian.id_pelanggan=pelanggan.id_pelanggan
	WHERE pembelian.id_pembelian='$_GET[id]'");
  $detail = $aroma2->fetch_assoc();
 ?>
 <!-- <pre> -->
 <!-- <?php #print_r($detail); ?> -->
<!-- </pre> -->
 <strong><?php echo $detail['nama_pelanggan']; ?></strong>

<div class="row">
	<div class="col-md-4">
		<h3>Pembelian</h3>
		 <p>
			 	tanggal :<?php echo $detail['tanggal_pembelian']; ?><br>
			 	 harga  :<?php echo $detail['total_pembelian']; ?>
		</p>
	</div>
	<div class="col-md-4">
		<h3>Pelanggan</h3>
		 <strong><?php echo $detail["nama_pelanggan"]; ?></strong><br>
		 <p>
			 	<?php echo $detail['telepon_pelanggan']; ?><br>
			 	<?php echo $detail['email_pelanggan']; ?>
		</p>
	</div>
	<div class="col-md-4">
		<h3>Pengiriman</h3>
		<strong><?php echo $detail["nama_kota"]; ?></strong><br>
		<p>
		Rp. <?php echo number_format($detail["tarif"]); ?><br>
		Alamat: <?php echo $detail["alamat_pengiriman"]; ?>
		</p>
	</div>
	<div class="col-md-4"></div>
</div>
 <table class="table table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama Produk</th>
 			<th>Harga</th>
 			<th>Jumlah</th>
 			<th>Subtotal</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $number=1; ?>
 		<?php $aroma2 = $koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
 		<?php while ($aroma=$aroma2 ->fetch_assoc()){ ?>
 		<tr>
 			<td><?php echo  $number; ?></td>
 			<td><?php echo $aroma['nama_produk']; ?></td>
 			<td>Rp. <?php echo number_format($aroma['harga_produk']); ?></td>
 			<td><?php echo $aroma['jumlah']; ?></td>
 			<td>Rp.<?php echo number_format($aroma ['harga_produk'] * $aroma ['jumlah']); ?></td>
 		</tr>
 		<?php $number++; ?>
 		<?php } ?>
 	</tbody>
 </table>