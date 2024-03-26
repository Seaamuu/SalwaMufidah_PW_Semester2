<?php

$kota = $_POST['kota'];
$suhu = $_POST['suhu'];

include 'suhu.php';

$temp = new Suhu($kota, $suhu);
$hasil = $temp->rentangSuhu();

// echo $kota;
// echo $suhu;
// echo $hasil;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1" style="width=100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kota</th>
                <th>Suhu</th>
                <th>Rentang</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td> <?= $kota ?> </td>
                <td> <?= $suhu ?> </td>
                <td> <?= $hasil ?> </td>
            </tr>
        </tbody>
    </table>
</body>
</html>