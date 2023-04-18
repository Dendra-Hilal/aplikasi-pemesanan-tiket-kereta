<?php 
include 'connect.php';

$id = $_POST['id'];
$nama_pemesan = $_POST['nama_pemesan'];
$nomor = $_POST['nomor'];
$nama_kereta = $_POST['nama_kereta'];
$jadwal_berangkat = $_POST['jadwal_berangkat'];
$penumpang = $_POST['penumpang'];
$tujuan = $_POST['tujuan'];
$kelas = $_POST['kelas'];
$harga = $_POST['harga'];

$query = mysqli_query($connect, "UPDATE pemesanan_tiket SET nama_pemesan='$nama_pemesan', nomor='$nomor', nama_kereta='$nama_kereta', jadwal_berangkat='$jadwal_berangkat', penumpang='$penumpang', tujuan='$tujuan', kelas='$kelas', harga='$harga' WHERE id='$id'") or die(mysqli_error());

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='../View/index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

header("location:../View/index.php");
?>