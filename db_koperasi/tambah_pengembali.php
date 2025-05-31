<?php
$koneksi = mysqli_connect("localhost:3307", "root", "", "db_koperasi");

if(isset($_POST["submit"])){
    var_dump($_POST);

    $nama = $_POST["nama"];
    $perusahaan = $_POST["perusahaan"];
    $jumlah_dikembalikan = $_POST["jumlah_dikembalikan"];

    $query = "INSERT INTO kembali (nama, perusahaan, jumlah_dikembalikan) VALUES ('$nama','$perusahaan','$jumlah_dikembalikan')";
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
    <title>Tambah Data Pengembalian</title>
    <link rel="stylesheet" href="kop.css">


</head>
<body style="background-color: #C4E1E6;">
    <h1>Tambah Data Pengembali</h1>
    
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
                <label for="jumlah_dikembalikan">Jumlah Pengembali:</label>
                <input type="number" name="jumlah_dikembalikan" id="jumlah_dikembalikan" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>

    <p><a href="index.php"><b> < Kembali ke Daftar Peminjam</b> </a></p>
</body>
</html>
