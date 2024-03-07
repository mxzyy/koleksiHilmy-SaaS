<?php
include("koneksi.php");
if (isset($_POST['UPDATE'])) {
    $id_alat=$_POST['id_alat'];
    $nama_alat=$_POST['nama_alat'];
    $kategori_alat=$_POST['kategori_alat'];
    $noseri=$_POST['noseri'];
    $tanggalmasuk=$_POST['tanggalmasuk'];

    $sql="UPDATE tbltoolhilmy SET nama_alat = '$nama_alat', kategori_alat = '$kategori_alat', noseri ='$noseri', tanggalmasuk = '$tanggalmasuk'
    WHERE id_alat='$id_alat' ";
    $query=mysqli_query($connect,$sql);

    if ($query) {
        header('location: index.php?');
    }else {
        header("Gagal Menyimpan Perubahan");
    }
}else {
    die("Akses dilarang...");
}
?>