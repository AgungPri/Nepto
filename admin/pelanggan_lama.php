<h2>Data Pelanggan Lama </h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Alamat Pelanggan</th>
			<th>Number Phone</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $number=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM pelanggan_lama"); ?>
		<?php  while ($dapat = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $number; ?></td>
			<td><?php echo $dapat["nama_pelanggan"]; ?></td>
			<td><?php echo $dapat["alamat_pelanggan"]; ?></td>
			<td><?php echo $dapat["number_phone"]; ?></td>
			<td><a href="index.php?halaman=hapuspelangganlama&id=<?php echo $dapat["id_pelanggan_lama"]; ?>" class="btn btn-danger">Hapus</a></td>
		</tr>
		<?php $number++; ?>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpelangganlama" class="btn btn-success">Tambah Pelanggan</a>