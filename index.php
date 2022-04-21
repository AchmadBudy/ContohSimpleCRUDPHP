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
            font-size: 16px;
            margin: 20px auto;
        }

        .card {
            margin: 10px 200px;
            padding: 8px 50px;
        }

        .button-sec {
            background-color: #83BD75;
            color: white;
            padding: 14px 20px;
            margin: 20px auto;
            border: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .button-third {
            background-color: red;
            color: white;
            padding: 14px 20px;
            margin: 20px auto;
            border: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }
    </style>


</head>

<body>
    <h2 style="text-align: center;">Daftar Barang Toko Serba Ada</h2>
    <div class="card">
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
                        <div class="" style="margin: 20px 0;">

                            <a href="ubah.php?id=<?= $data['id_barang']; ?>" class="button-sec">Edit</a>
                            <a href="hapus.php?id=<?= $data['id_barang']; ?>" onclick="alert('Apakah Yakin Untuk Dihapus?')" class="button-third">Hapus</a>
                        </div>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>

    <p style="text-align: center;">
        <a href="tambah.php" class="button">Tambah</a>
    </p>


</body>

</html>
