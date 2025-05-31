<?php
include "koneksi.php";

$nama = "Adi Saputra";
$perusahaan = "PT Jaya Lestari";
$tanggal_pinjam = "2025-05-26";
$tanggal_kembali = "2025-06-28";
$jumlah = "1000000";
$keterangan = "pembayaran harus sesuai tanggal";

$sql = " INSERT INTO  latihan6 (nama, perusahaan, tanggal_pinjam, tanggal_kembali, jumlah, keterangan) VALUES ('$nama','$perusahaan','$tanggal_pinjam','$tanggal_kembali','$jumlah','$keterangan')";

if (mysqli_query($conn, $sql)) {
    echo "Data Berhasil disimpan";
} else {
    echo "Gagal menyimpan data : " . mysqli_error($conn);
}
?>