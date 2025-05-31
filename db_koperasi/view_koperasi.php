<?php
include "koneksi.php";

$sql = "SELECT * FROM latihan6 ";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo "Nama: " . $row['nama'] . "<br>";
    echo "Perusahaan: " . $row['perusahaan'] . "<br>";
    echo "Tanggal_pinjam: " . $row['tanggal_pinjam'] . "<br>";
    echo "Tanggal_kembali: " . $row['tanggal_kembali'] . "<br>";
     echo "Jumlah: " . $row['jumlah'] . "<br>";
     echo "Keterangan: " . $row['keterangan'] . "<br><br>";
}
?>