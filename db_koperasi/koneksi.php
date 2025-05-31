<?php
$host = "localhost:3307";
$user = "root";
$password = "";
$db = "db_koperasi";

$conn = mysqli_connect("localhost:3307", "root", "", "db_koperasi");

if (!$conn) {
    die("koneksi gagal : " . mysqli_connect_error());
}
 //echo "Koneksi Berhasil";
?>