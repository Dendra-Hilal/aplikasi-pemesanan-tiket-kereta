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
    <h1>Menambahkan Data Pemesanan Tiket Kereta</h1>
    <br>
    <a href="../View/index.php" class="back-button">View All Data</a>
    <form action="../Controller/action_add.php" method="post">
        <table>
            <tr>
                <td>Nama Pemesan</td>
                <td><input type="text" name="nama_pemesan" required></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="number" name="nomor" required></td>
            </tr>
            <tr>
                <td>Nama Kereta</td>
                <td><input type="text" name="nama_kereta" required></td>
            </tr>
            <tr>
                <td>Jadwal Keberangkatan</td>
                <td><input type="text" name="jadwal_berangkat" required></td>
            </tr>
            <tr>
                <td>Penumpang</td>
                <td><input type="text" name="penumpang" required></td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td><input type="text" name="tujuan" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save Data"></td>
            </tr>
        </table>
    </form>
</body>
</html>