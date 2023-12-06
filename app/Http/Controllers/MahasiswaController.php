<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function create(Request $request)
    {
        try {
            Mahasiswa::create([
                "nama" => $request->nama,
                "nim" => $request->nim,
                "prodi" => $request->prodi
            ]);

            return redirect()->back()->with('alert', 'Data berhasil dimasukkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }

    public function isiForm()
    {
        return view('input-form');
    }

    public function read()
    {
        $mahasiswa = Mahasiswa::all();
        return view('data-mahasiswa', ['mahasiswas' => $mahasiswa]);
    }
}
