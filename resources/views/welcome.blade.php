@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="row g-2" action="/anjay" method="post">
            @csrf
            <div class="col-auto">
                <label for="nama" class="visually-hidden">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="masukkan nama anda">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
            </div>
        </form>
    </div>
@endsection
