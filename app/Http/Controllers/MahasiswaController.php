<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create(Request $request)
    {
        try {
            Mahasiswa::updateOrCreate([
                "nama" => $request->nama,
                "nim" => $request->nim,
                "prodi" => $request->prodi
            ]);

            return redirect()->to('mahasiswa')->with('alert', 'Data berhasil dimasukkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }

    public function viewForm(?int $id=null)
    {
        try {
            if ($id) {
                $mahasiswa = Mahasiswa::where('id', $id)->first();
                return view('input-form', ['mahasiswa' => $mahasiswa]);
            }

            return view('input-form', ['mahasiswa' => null]);
        } catch (\Exception $e) {
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }

    public function read()
    {
        $mahasiswa = Mahasiswa::all();
        return view('data-mahasiswa', ['mahasiswas' => $mahasiswa]);
    }

}
