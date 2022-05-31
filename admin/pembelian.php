<h2>Data Pembelian</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama pelanggan</th>
			<th>tanggal</th>
			<th>Status Pembelian</th>
			<th>total</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $number = 1; ?>
		<?php $aroma2 = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan"); ?>
		<?php while ($aroma = $aroma2->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $number; ?></td>
				<td><?php echo $aroma['nama_pelanggan']; ?></td>
				<td><?php echo $aroma['tanggal_pembelian']; ?></td>
				<td><?php echo $aroma['status_pembelian']; ?></td>
				<td><?php echo $aroma['total_pembelian']; ?></td>
				<td>
					<a href="index.php?halaman=detail&id=<?php echo $aroma['id_pembelian']; ?>" class="btn btn-info">detail</a>
					<?php if ($aroma['status_pembelian'] == "sudah kirim pembayaran") : ?>
						<a href="index.php?halaman=pembayaran&id=<?php echo $aroma['id_pembelian']; ?>" class="btn btn-success">Lihat Pembayaran</a>
					<?php endif ?>

				</td>
			</tr>
			<?php $number++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="cetakpembelian.php" class="btn btn-success">Print</a>
<!-- <a href="index.php?halaman=details.php" class="btn btn-info">detail</a> -->