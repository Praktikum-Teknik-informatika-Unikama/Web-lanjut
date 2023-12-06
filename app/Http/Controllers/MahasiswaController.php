<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function create(Request $request)
    {
        DB::table('mahasiswa')->insert([
            "nama" => $request->nama,
            "nim" => $request->nim,
            "prodi" => $request->prodi
        ]);

        return 'data berhasil di masukkan';
    }

    public function isiForm()
    {
        return view('input-form');
    }

    public function read()
    {
        return view('data-mahasiswa');
    }
}
