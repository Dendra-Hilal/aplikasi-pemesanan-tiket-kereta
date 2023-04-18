<?php 
include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM pemesanan_tiket WHERE id = '$id'") or die(mysqli_error());

if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='../View/index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='../View/index.php';</script>";
}

header("location:../View/index.php");
?>