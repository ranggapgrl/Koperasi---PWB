<?php
$koneksi = mysqli_connect("localhost:3307", "root", "", "db_koperasi");

if(isset($_POST["submit"])){
    var_dump($_POST);

    $nama = $_POST["nama"];
    $perusahaan = $_POST["perusahaan"];
    $tanggal_pinjam = $_POST["tanggal_pinjam"];
    $tanggal_kembali = $_POST["tanggal_kembali"];
    $jumlah = $_POST["jumlah"];
    $keterangan = $_POST["keterangan"];

    //query insert data
    $query = "INSERT INTO latihan6 (nama, perusahaan, tanggal_pinjam, tanggal_kembali, jumlah, keterangan) VALUES ('$nama','$perusahaan','$tanggal_pinjam','$tanggal_kembali','$jumlah','$keterangan')";
    mysqli_query($koneksi, $query);

 
    if(mysqli_affected_rows($koneksi) > 0){
        echo "Berhasil input";
    }else{
        echo "Gagal input <br>";
        echo mysqli_error($koneksi);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Peminjam</title>
<link rel="stylesheet" href="kop.css">

</head>
<body style="background-color: #C4E1E6;">
    <h1>Tambah Data Peminjam</h1>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="perusahaan">Perusahaan:</label>
                <input type="text" name="perusahaan" id="perusahaan" required>
            </li>
            <li>
                <label for="tanggal_pinjam">Tanggal Pinjam:</label>
                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" required>
            </li>
            <li>
                <label for="tanggal_kembali">Tanggal Kembali:</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" required>
            </li>
            <li>
                <label for="jumlah">Jumlah:</label>
                <input type="number" name="jumlah" id="jumlah" required>
            </li>
            <li>
                <label for="keterangan">Keterangan:</label>
                <textarea name="keterangan" id="keterangan" rows="3"></textarea>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>

    <p><a href="index.php"><b> < Kembali ke Daftar Peminjam</b> </a></p>
</body>
</html>
