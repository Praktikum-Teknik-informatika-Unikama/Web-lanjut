<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function create(Request $request)
    {
        DB::table('mahasiswa')->insert([
            "nama" => $request->nama,
            "nim" => $request->nim,
            "prodi" => $request->prodi,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);

        return redirect()->back() ->with('alert', 'Data berhasil di masukkan');
    }
    public function isiForm()
    {
        return view('input-form');
    }
    public function read()
    {
        $mahasiswas = DB::table('mahasiswa')->get();
        return view('data-mahasiswa', ['mahasiswas' => $mahasiswas]);
    }
}
