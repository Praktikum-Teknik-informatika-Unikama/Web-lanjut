@extends('layouts.app')

@section('content')
    <div>
        <table style="text-align:left ;border:1px solid;border-collapse: collapse;">
            <tr>
                <th style="border:1px solid; padding:10px; text-align:center">No</th>
                <th style="border:1px solid; padding:10px; text-align:center">Nama</th>
                <th style="border:1px solid; padding:10px; text-align:center">Nim</th>
                <th style="border:1px solid; padding:10px; text-align:center">Prodi</th>
                <th style="border:1px solid; padding:10px; text-align:center">Operasi</th>
            </tr>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td style="border:1px solid; padding:10px;">{{ $loop->iteration }}</td>
                    <td style="border:1px solid; padding:10px;">{{ $mahasiswa->nama }}</td>
                    <td style="border:1px solid; padding:10px;">{{ $mahasiswa->nim }}</td>
                    <td style="border:1px solid; padding:10px;">{{ $mahasiswa->prodi }}</td>
                    <td style="border:1px solid; padding:10px;">
                        <form id="{{$mahasiswa->id}}" action="{{ route('delete', $mahasiswa->id) }}" method="post"
                            style="display: none;"> @method('delete') @csrf </form>
                        <button>
                            <a href="{{ route('getdata', $mahasiswa->id) }}"">detail</a>
                        </button>
                        <button>
                            <a href="{{ route('form', $mahasiswa->id) }}"">edit</a>
                        </button>
                        <button>
                            <a href="javascript:void(0)" onclick="document.getElementById('{{$mahasiswa->id}}').submit()">delete</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
