<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    //
    public function create(Request $request)
    {
        $mahasiswa = DB::table('mahasiswa')->insert([
            "nama" => $request->nama,
            "nim" => $request->nim,
            "prodi" => $request->prodi
        ]);


        // menggunakan orm
        // $mahasiswa = new Mahasiswa;
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->nim = $request->nim;
        // $mahasiswa->prodi = $request->prodi;
        // $mahasiswa->save();

        return Redirect('/mahasiswa', 201);
    }

    public function isiForm()
    {
        return view('input-form');
    }
    public function read()
    {
        // Query builder
        $mahasiswas = DB::table('mahasiswa')->get();
        // dd($mahasiswas);
        // ORM
        // $mahasiswas = Mahasiswa::all();
        return view('data-mahasiswa', ['mahasiswas' => $mahasiswas]);
    }
}
