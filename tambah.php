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
</head>

<body>
    <form action="" method="POST">
        <label for="namabarang">Nama Barang : </label>
        <input type="text" name="namabarang" id="namabarang">
        <br>
        <label for="stok">Stok Barang : </label>
        <input type="number" name="stok" id="stok">
        <br>
        <label for="hargabeli">Harga Beli : </label>
        <input type="number" name="hargabeli" id="hargabeli">
        <br>
        <label for="hargajual">Harga Jual : </label>
        <input type="number" name="hargajual" id="hargajual">
        <br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>

</html>
