<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum web lanjut - form input</title>
</head>

<body>
    <center>
        <h1>Ini form inputan</h1>
        <form action="/hasilinputan" method="post">
            @csrf
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" placeholder="masukkan nama anda"><br><br>
            <label for="nim">Nim :</label>
            <input type="text" id="nim" name="nim" placeholder="masukkan nim anda"><br><br>
            <label for="prodi">Prodi :</label>
            <input type="text" id="prodi" name="prodi" placeholder="masukkan prodi anda"><br><br>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>
