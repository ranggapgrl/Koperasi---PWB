<?php
require 'function_kop.php';
$id = $_GET["id"];
$latihan6 = query("SELECT * FROM latihan6 WHERE id = $id")[0];
var_dump($latihan6["nama"]);

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0){
        echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>";
    } else {
       echo "<script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>";
    }
}


?>
<body>
    <h1>Ubah Data Peminjam</h1>
    <link rel="stylesheet" href="kop.css">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $latihan6["id"]; ?>">
        <ul>
            <li>
                <label for="NIDN">Nama: </label>
                <input type="text" name="nama" id="nama" required value="<?= $latihan6["nama"]; ?>">
            </li>
            <li>
                <label for="nama">Perusahaan: </label>
                <input type="text" name="perusahaan" id="perusahaan" required value="<?= $latihan6["perusahaan"]; ?>">
            </li>
            <li>
                <label for="email">Tanggal_Pinjam: </label>
                <input type="text" name="tanggal_pinjam" id="tanggal_pinjam" required value="<?= $latihan6["tanggal_pinjam"]; ?>">
            </li>
            <li>
                <label for="prodi">Tanggal_Kembali: </label>
                <input type="text" name="tanggal_kembali" id="tanggal_kembali" required value="<?= $latihan6["tanggal_kembali"]; ?>">
            </li>
            <li>
                <label for="foto">Jumlah: </label>
                <input type="text" name="jumlah" id="jumlah" value="<?= $latihan6["jumlah"]; ?>">
            </li>
             <li>
                <label for="foto">Keterangan: </label>
                <input type="text" name="keterangan" id="keterangan" value="<?= $latihan6["keterangan"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit"> Ubah</button>
            </li>
        </ul>
    </form>
    <a href="index.php"><b style="color: #1976d2;">Kembali ke halaman awal</b></a>
</body>