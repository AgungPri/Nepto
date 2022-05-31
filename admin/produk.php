<h2>Data Produk</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>Nama</th>
			<th>Tipe</th>
			<th>Gambar</th>
			<th>Spesifikasi</th>
			<th>Sku</th>
			<th>Aksi</th>
		</tr>
	</thead>
	 <tbody>
	 	<?php $number=1; ?>
	 	<?php $nepto2=$koneksi->query("SELECT * FROM product"); ?>
	 	<?php while($nepto = $nepto2->fetch_assoc()){ ?>
	 	<tr>
	 		<td><?php echo $number; ?></td>
	 		<td><?php echo $nepto['name_product']; ?></td>
			<td><?php echo $nepto['type_product']; ?></td>
	 		<td><img src="../foto_produk/<?php echo $nepto['picture_product']; ?>" width="100"></td>
	 		<td><?php echo $nepto['spec_product']; ?></td>
	 		<td><?php echo $nepto['sku_product']; ?></td>
	 		<td>
	 			<a href="index.php?halaman=hapusproduk&id=<?php echo $nepto["id_product"]; ?>" class="btn btn-danger">hapus</a>
	 			<a class="btn btn-warning">ubah</a>
	 		</td>
	 	</tr>
	 	<?php $number++; ?>
	 <?php } ?>
	 </tbody>
</table>
<a class="btn btn-primary">Tambah Data</a>