<h2>Data Pelanggan Online</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>Username</th>
			<th>telepon</th>
			<th>Email</th>
			<th>password</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $number = 1; ?>
		<?php $aroma2 = $koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while ($aroma = $aroma2->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $number; ?></td>
				<td><?php echo $aroma['nama_pelanggan']; ?></td>
				<td><?php echo $aroma['email_pelanggan']; ?></td>
				<td><?php echo $aroma['telepon_pelanggan']; ?></td>
				<td><?php echo $aroma['domain_pelanggan']; ?></td>
				<td><?php echo $aroma['password_pelanggan']; ?></td>
				<td>
					<a href="index.php?halaman=hapuspelanggan&id=<?php echo $aroma['id_pelanggan']; ?>" class="btn btn-danger">hapus</a>
					<a href="index.php?halaman=ubahpelanggan&id=<?php echo $aroma['id_pelanggan']; ?>" class="btn btn-warning">Ubah</a>
				</td>
			</tr>
			<?php $number++; ?>
		<?php } ?>
	</tbody>
</table>
<!-- <a href="index.php?halaman=tambahpelanggan&id=<?php echo $aroma['id_pelanggan']; ?>" class="btn btn-primary" float="left">Tambah Pelanggan</a> -->
<a href="cetakpelanggan.php" class="btn btn-success">Print</a>