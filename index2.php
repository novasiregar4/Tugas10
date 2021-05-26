<?php
$koneksi = mysqli_connect("localhost", "root", "", "toko");
$result = mysqli_query($koneksi, "SELECT * FROM barang");

// while ($brg = mysqli_fetch_assoc($result)) {;
//     var_dump($brg);
// }
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
        while ($row = mysqli_fetch_assoc($result)) :
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
        endwhile;
        ?>
    </table>
</body>

</html>