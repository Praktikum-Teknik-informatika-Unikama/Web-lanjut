@extends('layouts.app')

@section('content')
    <h2>Input Data Diri</h2>
    <div>
        <form action="/add-mahasiswa" method="post">
            @csrf
            <label for="nama">Masukkan nama anda : </label>
            <input type="text"  id="nama" name="nama" placeholder="ex. jhon"> <br><br>
            <label for="nim">Masukkan nomer induk mahasiswa anda : </label>
            <input type="text"  id="nim" name="nim"placeholder="ex. 2134"> <br><br>
            <label for="prodi">Masukkan program studi anda : </label>
            <input type="text"  id="prodi" name="prodi"placeholder="ex. teknik informatika"><br><br>
            <input type="submit" value="submit">
        </form>
    </div>
@endsection
