<?php
require_once 'function.php';

$koneksi = new databasenya;

$datas = $koneksi->tambilData();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas MySQl</title>
</head>

<body>
    <a href="tambah.php">tambah</a>
    <table border="1px">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Stock</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($datas as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data['nama_barang']; ?></td>
                <td><?= $data['stok']; ?></td>
                <td><?= number_format($data['harga_beli']); ?></td>
                <td><?= number_format($data['harga_jual']); ?></td>
                <td>
                    <a href="ubah.php?id=<?= $data['id_barang']; ?>">Edit</a>
                    <a href="hapus.php?id=<?= $data['id_barang']; ?>" onclick="alert('Apakah Yakin Untuk Dihapus?')">Hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>

</body>

</html>
