<h2>Data Pembelian Offline</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah Produk</th>
            <th>Harga Total Pembelian</th>
            <th>Nama Pelanggan</th>
            <th>Password Pelanggan</th>
            <th>Jam</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $number = 1; ?>
        <?php $aroma2 = $koneksi->query("SELECT * FROM pembelian_offline"); ?>
        <?php while ($aroma = $aroma2->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $number; ?></td>
                <td><?php echo $aroma["nama_produk"]; ?></td>
                <td><?php echo $aroma["jumlah_produk"]; ?></td>
                <td><?php echo number_format($aroma["total_harga_pembelian"]); ?></td>
                <td><?php echo $aroma["nama_pelanggan"]; ?></td>
                <td><?php echo $aroma["password_pelanggan"]; ?></td>
                <td><?php echo $aroma["jam"]; ?></td>
                <td><a href="index.php?halaman=hapuspembelianoffline&id=<?php echo $aroma['id_pembelian_ofline']; ?>" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php $number++ ?>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?halaman=tambahpembelianoffline" class="btn btn-success">Tambah Pembelian Offline</a>