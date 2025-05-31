<?php
require 'function_kop.php';
$id = $_GET["id"];
$kembali = query("SELECT * FROM kembali WHERE id = $id")[0];
var_dump($kembali["nama"]);

if (isset($_POST["submit"])) {
    if (ubah_pengembali($_POST) > 0){
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
        <input type="hidden" name="id" value="<?= $kembali["id"]; ?>">
        <ul>
            <li>
                <label for="NIDN">Nama: </label>
                <input type="text" name="nama" id="nama" required value="<?= $kembali["nama"]; ?>">
            </li>
            <li>
                <label for="nama">Perusahaan: </label>
                <input type="text" name="perusahaan" id="perusahaan" required value="<?= $kembali["perusahaan"]; ?>">
            </li>
            <li>
                <label for="foto">Jumlah Pengembali: </label>
                <input type="text" name="jumlah_dikembalikan" id="jumlah_dikembalikan" value="<?= $kembali["jumlah_dikembalikan"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit"> Ubah</button>
            </li>
        </ul>
    </form>
    <a href="index.php"><b style="color: #1976d2;">Kembali ke halaman awal</b></a>
</body>