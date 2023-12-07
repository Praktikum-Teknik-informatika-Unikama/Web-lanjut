@extends('layouts.app')

@section('content')
    @php
        $judul = $mahasiswa ? 'Update data diri' : 'Input data diri';
        $method = $mahasiswa ? 'put' : 'post';
        $action = $mahasiswa ? "/update-mahasiswa/$mahasiswa->id" : 'add-mahasiswa';
    @endphp

    <h2>{{ $judul }}</h2>
    <div>
        <form action="{{ $action }}" method="post">
            @csrf
            @method($method)
            <label for="nama">Masukkan nama anda : </label>
            <input type="text" id="nama" name="nama" value="{{ $mahasiswa ? $mahasiswa->nama : '' }}"
                placeholder="ex. jhon"> <br><br>
            <label for="nim">Masukkan nomer induk mahasiswa anda : </label>
            <input type="text" id="nim" name="nim" value="{{ $mahasiswa ? $mahasiswa->nim : '' }}"
                placeholder="ex. 2134"> <br><br>
            <label for="prodi">Masukkan program studi anda : </label>
            <input type="text" id="prodi" name="prodi" value="{{ $mahasiswa ? $mahasiswa->prodi : '' }}"
                placeholder="ex. teknik informatika"><br><br>
            <input type="submit" value="submit">
        </form>
    </div>
@endsection
