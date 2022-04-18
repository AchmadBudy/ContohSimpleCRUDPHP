<?php
require_once 'function.php';


$koneksi = new databasenya;

if (isset($_POST['submit'])) {
    echo $koneksi->ubahData($_POST);
}
if (!isset($_GET['id'])) {
    echo '<h1>Data Tidak Ada!!!!!!</h1>';
    die;
}
$datas = $koneksi->ambilSpekData($_GET['id']);
if ($datas == 0) {
    echo '<h1>Data Tidak Ada!!!!!!</h1>';
    die;
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
        <input type="hidden" name="id" value="<?= $datas[0]['id_barang']; ?>">
        <label for=" namabarang">Nama Barang : </label>
        <input type="text" name="namabarang" id="namabarang" value="<?= $datas[0]['nama_barang']; ?>">
        <br>
        <label for="stok">Stok Barang : </label>
        <input type="number" name="stok" id="stok" value="<?= $datas[0]['stok']; ?>">
        <br>
        <label for="hargabeli">Harga Beli : </label>
        <input type="number" name="hargabeli" id="hargabeli" value="<?= $datas[0]['harga_beli']; ?>">
        <br>
        <label for="hargajual">Harga Jual : </label>
        <input type="number" name="hargajual" id="hargajual" value="<?= $datas[0]['harga_jual']; ?>">
        <br>
        <button type="submit" name="submit">Ubah</button>
    </form>

    <a href="/">Kembali</a>
</body>

</html>
