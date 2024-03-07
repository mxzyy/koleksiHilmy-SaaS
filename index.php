<?php
include("koneksi.php");
?>
<html>
<head>
    <title>Koleksi Buku Hilmy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    <style>
        html{
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }
        .title{
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        .titlee{
            color: #fcba03;
            font-weight: 800;
        }
    </style>
</head>
<body class="mx-3">
    <header>
        <h3 class="title pt-3 text-center">&#128218; Koleksi Buku <span class="titlee">Hilmy</span></h3>    
    </header>
    <nav>
        <a type="button" class="btn btn-outline-secondary fw-bolder" href="fr_input.php">➕ Tambah Buku</a>
    </nav>
    <br>
    <table class="table ">
        <thead class="table-dark table-hover">
            <tr>
                <th scope="col">ID Buku</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Kategori</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Edit / Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql="SELECT * FROM tblkoleksihilmy";
            $query=mysqli_query($connect,$sql);
            while ($buku= mysqli_fetch_array($query)){
                echo"<tr>";
                echo"<td>",$buku['id_buku'],"</td>";
                echo"<td>",$buku['nama_buku'],"</td>";
                echo"<td>",$buku['genre_buku'],"</td>";
                echo"<td>",$buku['pengarang'],"</td>";
                echo"<td>",$buku['tahunterbit'],"</td>";
                
                echo"<td>";
                echo"<a href='fr_edit.php?id_buku=",$buku['id_buku'],"'>EDIT | </a>";
                echo"<a href='delete_buku.php?id_buku=",$buku['id_buku'],"'>DELETE </a>";
                echo"</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
    </table>
    <p> Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>