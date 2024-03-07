<?php
include("koneksi.php");

if (isset($_POST['SAVE'])) {

    $id_buku = $_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $genre_buku = $_POST['genre_buku'];
    $pengarang = $_POST['pengarang'];
    $tahunterbit = $_POST['tahunterbit'];

    $sql="INSERT INTO tblkoleksihilmy
    (id_buku, nama_buku, genre_buku, pengarang, tahunterbit) VALUES
    ('$id_buku','$nama_buku','$genre_buku','$pengarang','$tahunterbit')";

    $query=mysqli_query($connect,$sql);

    if ($query) {
        header('location: index.php?status=sukses');
    }else {
        header('location: index.php?status=gagal');
    }
}else {
    die("Akses dilarang...");
}
?>