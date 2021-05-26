<?php
require 'functions.php';
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Disimpan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        ('Data Gagal Disimpan');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>

<body>
    <h1>Tambah Barang</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="kodeBrg">Kode Barang :</label>
                <input type="text" name="kodeBrg" id="kodeBrg" required>
            </li>
            <li>
                <label for="namaBrg">Nama Barang :</label>
                <input type="text" name="namaBrg" id="namaBrg" required>
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="jumlah">Jumlah :</label>
                <input type="text" name="jumlah" id="jumlah" required>
            </li>
            <br></br>
            <button type="submit" name="submit">Simpan</button>
        </ul>
    </form>
</body>

</html>