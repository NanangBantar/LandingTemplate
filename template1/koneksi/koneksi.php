<?php
$servername = "localhost";
$database = "testlaravel";
$username = "root";
$password = "root";

$koneksi = mysqli_connect($servername, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>