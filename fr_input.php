<!DOCTYPE html>
<html>

<head>
    <title>SISTEM INFORMASI PERALATAN SMK N 2 YOGYAKARTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    <style>
        .title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        .box {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <h2 class="title pt-5 text-left mx-5">📌 Input Data Peralatan</h2>
    </header>
    <form action="save_buku.php" method="POST">
        <div class="box mx-5">
            <p class="my-3 row">
                <label class="col-sm-2" for="id_buku">ID Buku :</label>
                <textarea class="col-sm-2" name="id_buku"></textarea>
            </p>
            <p class="my-3 row">
                <label class="col-sm-2" for="nama_buku">Nama Buku :</label>
                <textarea class="col-sm-2" name="nama_buku"></textarea>
            </p>
            <p class="my-3 row">
                <label class="col-sm-2" for="genre_buku">Genre Buku :</label>
                <textarea class="col-sm-2" name="genre_buku"></textarea>
            </p>
            <p class="my-3 row">
                <label class="col-sm-2" for="pengarang">Pengarang :</label>
                <textarea class="col-sm-2" name="pengarang"></textarea>
            </p class="my-3 row">
            <p class="my-3 row">
                <label class="col-sm-2" for="tahunterbit">Tahun Terbit :</label>
                <textarea class="col-sm-2" name="tahunterbit"></textarea>
            </p>

                <input class="btn btn-warning text-white fw-bolder px-3" type="submit" name="SAVE" value="SAVE">
                <input class="btn btn-danger text-white fw-bolder px-3" type="reset" value="RESET">

        </div>
</body>

</html>