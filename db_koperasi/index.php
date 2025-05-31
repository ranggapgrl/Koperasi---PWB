<?php
require_once 'function_kop.php';
$latihan6 = query("SELECT * FROM latihan6");
$kembali = query("SELECT * FROM kembali");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
  <link rel="stylesheet" href="kop.css">
   
    
</head>

<body style="background-color: #C4E1E6;">
    
                    <!-- Table pertama -->
    <h1 align="center">Daftar Peminjam <span style="color: #1976d2;">Koperasi</span></h1>

    <p><a href="tambah_kop.php"><b style="border-radius: 10px;">Tambah Data Peminjam</b> </a></p>

    <table border="1" cellpadding="10" cellspacing="2">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th style="color: #1976d2;">Perusahaan</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
        </tr>
        
        <?php if (count($latihan6) === 0): ?>
            <tr>
                <td colspan="8" align="center">Tidak ada data peminjam.</td>
            </tr>
        <?php else: ?>
            <?php $i = 1; ?>
            <?php foreach ($latihan6 as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id']; ?>"><b>Ubah</b></a> 
                    <a href="hapus_kop.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus?')"><b>Hapus</b></a>
                </td>
                <td><?= htmlspecialchars($row["nama"]); ?></td>
                <td><?= htmlspecialchars($row["perusahaan"]); ?></td>
                <td><?= htmlspecialchars($row["tanggal_pinjam"]); ?></td>
                <td><?= htmlspecialchars($row["tanggal_kembali"]); ?></td>
                <td class="rupiah"><?= $row["jumlah"]; ?></td>
                <td><?= htmlspecialchars($row["keterangan"]); ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </table><br><br>

  <!-- Table kedua -->

    <h1 align="center">Daftar Pengembali <span style="color: #1976d2;">Koperasi</span></h1>
    <a href="tambah_pengembali.php"><b style="color: #1976d2;">Tambah Data Pengembali</b></a>
    <table border="1" cellpadding="10" cellspacing="2">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th style="color: #1976d2;">Perusahaan</th>
            <th>Jumlah</th>
        </tr>
        
        <?php if (count($kembali) === 0): ?>
            <tr>
                <td colspan="8" align="center">Tidak ada data pengembali.</td>
            </tr>
        <?php else: ?>
            <?php $i = 1; ?>
            <?php foreach ($kembali as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah_pengembali.php?id=<?= $row['id']; ?>"><b>Ubah</b></a> 
                    <a href="hapus_pengembali.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus?')"><b>Hapus</b></a>
                </td>
                <td><?= htmlspecialchars($row["nama"]); ?></td>
                <td><?= htmlspecialchars($row["perusahaan"]); ?></td>
                <td class="rupiah"><?= $row["jumlah_dikembalikan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

    
    <script>
      const formatRupiah = (angka) => {
        return new Intl.NumberFormat('id-ID', {
          style: 'currency',
          currency: 'IDR'
        }).format(angka);
      };

      document.querySelectorAll('.rupiah').forEach(cell => {
        const nilai = parseFloat(cell.textContent);
        if (!isNaN(nilai)) {
          cell.textContent = formatRupiah(nilai);
        }
      });
    </script>



   


</body>
</html>


