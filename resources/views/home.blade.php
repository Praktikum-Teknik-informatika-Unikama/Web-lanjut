@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Nim</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs['nama'] }}</td>
                        <td> {{$mhs['umur']}} </td>
                        <td> {{$mhs['nim']}} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
