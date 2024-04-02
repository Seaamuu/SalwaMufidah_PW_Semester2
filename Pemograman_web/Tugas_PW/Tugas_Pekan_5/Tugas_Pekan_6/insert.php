<?php

include 'koneksi.php';

$pengirim = $_POST['nama_pengirim'];
$alamat = $_POST['alamat_penerima'];
$barang = $_POST['deskripsi_barang'];
$penerima = $_POST['nama_penerima'];

$query = "INSERT INTO pengiriman (nama_pengirim, alamat_penerima, deskripsi_barang, nama_penerima)
            VALUES ('$pengirim', '$alamat', '$barang', '$penerima')";

if( $conn->query($query) === TRUE ) {
    header("Location: index.php");
}

$conn->close();

?>