<?php 
require "../Controller/connect.php";
$ticket = query("SELECT * FROM pemesanan_tiket"); ?>

<!-- MVC atau Model View Controller adalah sebuah pola desain arsitektur dalam sistem pengembangan website yang terdiri dari tiga bagian, yaitu: 1. Model, bagian yang mengelola dan berhubungan langsung dengan database; 2. View, bagian yang akan menyajikan tampilan informasi kepada pengguna; dan 3. Controller, bagian yang menghubungkan model dan view dalam setiap proses request dari user. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">Daftar Data Pemesanan Tiket Kereta</h1>
    <a href="../Model/form_add.php" class="add-button">Add Record</a>
    <table>
        <tr>
            <th align="center">No.</th>
            <th>Nama Pemesan</th>
            <th>No. Telp</th>
            <th>Nama Kereta</th>
            <th>Jadwal Keberangkatan</th>
            <th>Penumpang</th>
            <th>Tujuan</th>
            <th>Kelas</th>
            <th>Harga</th>
            <th>Opsi</th>
        </tr>
        <?php $number = 1;?>
        <?php foreach($ticket as $t) : ?>
        <tr>
            <td align="center"><?= $number;?></td>
            <td><?= $t['nama_pemesan'];?></td>
            <td><?= $t['nomor'];?></td>
            <td><?= $t['nama_kereta'];?></td>
            <td><?= $t['jadwal_berangkat'];?></td>
            <td><?= $t['penumpang'];?></td>
            <td><?= $t['tujuan'];?></td>
            <td><?= $t['kelas'];?></td>
            <td><?= $t['harga'];?></td>
            <td align="center">
                <a href="../Model/form_edit.php?id=<?= $t['id'];?>">Edit</a>
                <a href="../Controller/action_delete.php?id=<?= $t['id'];?>" onclick="return confirm('Are you sure you want delete this record?')">Delete</a>
            </td>
        </tr>
        <?php $number++;?>
        <?php endforeach;?>
    </table>
</body>
</html>