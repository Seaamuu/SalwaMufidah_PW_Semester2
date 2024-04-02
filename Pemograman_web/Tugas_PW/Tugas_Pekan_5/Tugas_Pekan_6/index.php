<?php 
    
    include 'koneksi.php';

    $query = "SELECT * FROM pengiriman";
    $result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengiriman Barang</title>
</head>
<body>

<h2>Data Pengiriman Barang</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama Pengirim</th>
            <th>Alamat Penerima</th>
            <th>Deskripsi Barang</th>
            <th>Nama Penerima</th>
            <th>Aksi</th>
        </tr>

        <?php while( $row = $result->fetch_assoc() ) :  ?>
            
        <tr>
            <td> <?= $row['id'] ?>  </td>
            <td><?= $row['nama_pengirim'] ?></td>
            <td><?= $row['alamat_penerima'] ?></td>
            <td><?= $row['deskripsi_barang'] ?></td>
            <td><?= $row['nama_penerima'] ?></td>
            <td>
                <a href="edit.php">Edit</a>
                <a href="delete.php">Delete</a>
            </td>
        </tr>
        <?php  endwhile  ?>

    </table>
    <br>
    
    <h2>Data pengiriman Barang</h2>
    <form action="insert.php" method="POST">
        Nama Pengirim: <input type="text" name="nama_pengirim" required><br>
        Alamat Penerima: <input type="text" name="alamat_penerima" required><br>
        Deskripsi Barang: <input type="text" name="deskripsi_barang" required><br>
        Nama Penerima: <input type="text" name="nama_penerima" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>