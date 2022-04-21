<?php
require_once 'function.php';
$koneksi = new databasenya;
if (isset($_POST['submit'])) {
    echo $koneksi->tambahData($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>

    <style>
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin: 10px 400px;
            padding: 8px 50px;
            background-color: #E7E9EB;
        }

        .button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 20px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .button-sec {
            background-color: #83BD75;
            color: white;
            padding: 14px 20px;
            margin: 20px auto;
            border: none;
            cursor: pointer;
            width: 90%;
            display: block;
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2 style="text-align: center;">Tambah Data</h2>
        <form action="" method="POST">
            <label for="namabarang">Nama Barang : </label>
            <input type="text" name="namabarang" id="namabarang">
            <label for="stok">Stok Barang : </label>
            <input type="number" name="stok" id="stok">
            <label for="hargabeli">Harga Beli : </label>
            <input type="number" name="hargabeli" id="hargabeli">
            <label for="hargajual">Harga Jual : </label>
            <input type="number" name="hargajual" id="hargajual">
            <button type="submit" name="submit" class="button">Tambah</button>
            <a href="/index.php" class="button-sec">Kembali</a>
        </form>

    </div>
</body>

</html>
