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
                        <button>
                            <a href="/add-mahasiswa/{{ $mahasiswa->id }}">Edit</a>

                        </button>
                        <button>
                            delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
