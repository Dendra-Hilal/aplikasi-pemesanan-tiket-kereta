<?php 
require "../Controller/connect.php";
$ticket = query("SELECT * FROM pemesanan_tiket"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
    <link rel="stylesheet" href="../View/style.css">
</head>
<body>
    <h1>Mengedit Data Pemesanan Tiket Kereta</h1>
    <br>
    <a href="../View/index.php" class="back-button">View All Data</a>
    <form action="../Controller/action_edit.php" method="post">
        <?php foreach($ticket as $t) : ?>
        <table>
            <tr>
                <td>Nama Pemesan</td>
                <td><input type="text" name="nama_pemesan" value="<?= $t['nama_pemesan'];?>" required></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="number" name="nomor" value="<?= $t['nomor'];?>" required></td>
            </tr>
            <tr>
                <td>Nama Kereta</td>
                <td><input type="text" name="nama_kereta" value="<?= $t['nama_kereta'];?>" required></td>
            </tr>
            <tr>
                <td>Jadwal Keberangkatan</td>
                <td><input type="text" name="jadwal_berangkat" value="<?= $t['jadwal_berangkat'];?>" required></td>
            </tr>
            <tr>
                <td>Penumpang</td>
                <td><input type="text" name="penumpang" value="<?= $t['penumpang'];?>" required></td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td><input type="text" name="tujuan" value="<?= $t['tujuan'];?>" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?= $t['kelas'];?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?= $t['harga'];?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save Data"></td>
            </tr>
        </table>
        <?php endforeach;?>
    </form>
</body>
</html>