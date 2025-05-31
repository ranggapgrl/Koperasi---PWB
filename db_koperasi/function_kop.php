<?php
// Koneksi ke database
$conn = mysqli_connect("localhost:3307", "root", "", "db_koperasi");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// menambah data
function tambah($data) {
    global $conn;

    $nama = ($data["nama"]);
    $perusahaan = ($data["perusahaan"]);
    $tanggal_pinjam = ($data["tanggal_pinjam"]);
    $tanggal_kembali = ($data["tanggal_kembali"]);
    $jumlah = ($data["jumlah"]);
    $keterangan = ($data["keterangan"]);

    $query = "INSERT INTO latihan6 
              (nama, perusahaan, tanggal_pinjam, tanggal_kembali, jumlah, keterangan)
              VALUES 
              ('$nama', '$perusahaan', '$tanggal_pinjam', '$tanggal_kembali', '$jumlah', '$keterangan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// menghapus data peminjam koperasi
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM latihan6 WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// mengubah data peminjam koperasi
function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $perusahaan = $data["perusahaan"];
    $tanggal_pinjam = $data["tanggal_pinjam"];
    $tanggal_kembali = $data["tanggal_kembali"];
    $jumlah = $data["jumlah"];
    $keterangan = $data["keterangan"];
    
    $query = "UPDATE latihan6 SET
    nama='$nama', perusahaan='$perusahaan',tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali',jumlah='$jumlah',keterangan='$keterangan'
    WHERE id=$id";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
    
// menghapus data pengembali koperasi
function hapus_pengembali($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM kembali WHERE id = $id");
    return mysqli_affected_rows($conn);

}

// mengubah data pengembali koperasi
 function ubah_pengembali($data){
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $perusahaan = $data["perusahaan"];
    $jumlah_dikembalikan = $data["jumlah_dikembalikan"];

    
    $query = "UPDATE kembali SET
    nama='$nama', perusahaan='$perusahaan',jumlah_dikembalikan='$jumlah_dikembalikan'
    WHERE id=$id";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
    
?>
