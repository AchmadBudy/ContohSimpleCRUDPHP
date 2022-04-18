<?php
class databasenya
{
    private $database = 'paw';
    private $username = 'root';
    private $password = '';
    private $port = 3306;

    public function __construct()
    {
        $this->koneksi = new mysqli("localhost", $this->username, $this->password, $this->database, $this->port);

        // Check connection
        if ($this->koneksi->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->koneksi->connect_error;
            exit();
        }
    }

    public function tambilData()
    {
        $sql = "SELECT * FROM tugas1";
        $result = $this->koneksi->query($sql);

        $temp = [];
        // Associative array
        while ($row = $result->fetch_assoc()) {
            array_push($temp, $row);
        }

        return $temp;
    }


    public function tambahData($datas)
    {
        $namaBarang = $datas['namabarang'];
        $stok = $datas['stok'];
        $hargabeli = $datas['hargabeli'];
        $hargajual = $datas['hargajual'];
        $sql = "INSERT INTO tugas1 (`id_barang`, `nama_barang`, `stok`, `harga_beli`, `harga_jual`)
        VALUES (NULL, '$namaBarang', $stok, $hargabeli, $hargajual); ";

        if ($this->koneksi->query($sql) === TRUE) {
            return "New record created successfully";
        } else {
            return "Error: " . $sql . "<br>" . $this->koneksi->error;
        }
    }

    public function ubahData($datas)
    {
        $idBarang = $datas['id'];
        $namaBarang = $datas['namabarang'];
        $stok = $datas['stok'];
        $hargabeli = $datas['hargabeli'];
        $hargajual = $datas['hargajual'];
        $sql = "UPDATE `tugas1` SET `nama_barang` = '$namaBarang', `stok` = $stok, `harga_beli` = $hargabeli, `harga_jual` = $hargajual WHERE `id_barang` = $idBarang;";

        if ($this->koneksi->query($sql) === TRUE) {
            return '<h1>Data Berhasil diUbahhh</h1>';
        } else {
            return "Error: " . $sql . "<br>" . $this->koneksi->error;
        }
    }

    public function ambilSpekData($id)
    {
        $sql = "SELECT * FROM tugas1 WHERE `id_barang` = $id";
        $result = $this->koneksi->query($sql);

        if ($result->num_rows > 0) {
            $temp = [];
            // Associative array
            while ($row = $result->fetch_assoc()) {
                array_push($temp, $row);
            }

            return $temp;
        } else {
            return 0;
        }
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM tugas1 WHERE `id_barang` = $id";
        $result = $this->koneksi->query($sql);

        if ($this->koneksi->query($sql) === TRUE) {
            return true;
        } else {
            return "Error: " . $sql . "<br>" . $this->koneksi->error;
        }
    }
}
