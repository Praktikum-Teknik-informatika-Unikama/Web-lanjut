<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <h3>Form Pendaftaran</h3>
    <form action="proses" method="post">
        {{ csrf_field() }}
        Nama :
        <input type="text" name="nama">
        <br />
        <br />
        Umur :
        <input type="text" name="umur">
        <br />
        <hr />
        <input type="submit" value="Simpan">
    </form>
</body>

</html>
