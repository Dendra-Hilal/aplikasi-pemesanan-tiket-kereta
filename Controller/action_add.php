<?php 
include 'connect.php';

$nama_pemesan = $_POST['nama_pemesan'];
$nomor = $_POST['nomor'];
$nama_kereta = $_POST['nama_kereta'];
$jadwal_berangkat = $_POST['jadwal_berangkat'];
$penumpang = $_POST['penumpang'];
$tujuan = $_POST['tujuan'];
$kelas = $_POST['kelas'];
$harga = $_POST['harga'];

$query = mysqli_query($connect, "INSERT INTO pemesanan_tiket (nama_pemesan, nomor, nama_kereta, jadwal_berangkat, penumpang, tujuan, kelas, harga) VALUES ('$nama_pemesan', '$nomor', '$nama_kereta', '$jadwal_berangkat', '$penumpang', '$tujuan', '$kelas', '$harga')") or die(mysqli_error());

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='../View/index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

header("location:../View/index.php");
?>