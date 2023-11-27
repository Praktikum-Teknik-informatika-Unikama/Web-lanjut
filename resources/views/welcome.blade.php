@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="masukkan nama anda">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nomer Induk Mahasiswa</label>
                <input type="text" class="form-control" id="nim" placeholder="masukkan nim anda">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="prodi" placeholder="masukkan prodi anda">
            </div>
            <button class="btn btn-primary" type="submit">Button</button>
        </form>
    </div>
@endsection
