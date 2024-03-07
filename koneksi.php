<?php
$host="localhost";
$user="root";
$passwd="";
$database="koleksihilmy";

$connect=mysqli_connect($host, $user, $passwd, $database);
if (!$connect) {
    die("tidak terkoneksi". mysqli_connect_error());
} //else{echo("Koneksi Berhasil");}
//mysqli_close($connect);
?>