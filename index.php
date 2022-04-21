<?php
require_once 'function.php';

$koneksi = new databasenya;

$datas = $koneksi->tambilData();

?>

<!DOCTYPE html>
<html>

<head>

    <title>Tugas MySQl</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }



        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>


</head>

<body>

    <table id="customers">
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

    <a href="tambah.php" class="button">Tambah</a>


</body>

</html>
