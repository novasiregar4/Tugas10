<?php
require 'functions.php';
$barang = query("SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Barang</h1>
    <a href="tambah.php">Tambah Barang</a>
    <br></br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php
        $i = 1;
        foreach ($barang as $row) :
        ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ubah</a>
                    <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
                </td>
                <td><?= $row['kodeBrg'] ?></td>
                <td><?= $row['namaBrg'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><?= $row['jumlah'] ?></td>
            </tr>
            <?php $i++; ?>
        <?php
        endforeach;
        ?>
    </table>
</body>

</html>