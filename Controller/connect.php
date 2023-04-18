<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'daftar_data_pemesanan';

$connect = mysqli_connect($server, $username, $password, $dbname);

function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>