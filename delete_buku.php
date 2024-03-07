<?php
include("koneksi.php");
if (isset($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku'];

$sql="DELETE FROM tblkoleksihilmy WHERE id_buku=$id_buku";
$query=mysqli_query($connect,$sql);

if ($query) {
    header('location: index.php?');
}else {
    header("Gagal Menghapus");
}
}else {
die("Akses dilarang...");
}
?>