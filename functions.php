<?php
$koneksi = mysqli_connect("localhost", "root", "", "toko");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $kodeBrg = htmlspecialchars($data["kodeBrg"]);
    $namaBrg = htmlspecialchars($data["namaBrg"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "INSERT INTO barang VALUES('','$kodeBrg','$namaBrg','$harga','$jumlah')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM barang WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
