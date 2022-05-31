<h2>Pelanggan Baru</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Password Pelanggan</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Pelanggan baru itu fiturnya sama dengan pembelian_offline -->
        <?php $number = 1; ?>
        <?php $aroma2 = $koneksi->query("SELECT * FROM pembelian_offline"); ?>
        <?php while ($aroma = $aroma2->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $number; ?></td>
                <td><?php echo $aroma["nama_pelanggan"]; ?></td>
                <td><?php echo $aroma["password_pelanggan"]; ?></td>
                <td><?php echo $aroma["jam"]; ?></td>
                <td><a href="index.php?halaman=hapuspembelianoffline&id=<?php echo $aroma['id_pembelian_ofline']; ?>" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php $number++ ?>
        <?php } ?>
    </tbody>
</table>