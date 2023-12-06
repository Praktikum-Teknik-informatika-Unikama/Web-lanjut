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

            if($request->route()->getName() == "update"){

                return redirect()->to('mahasiswa')->with('alert', 'Data berhasil diupdate');
            }

            return redirect()->to('mahasiswa')->with('alert', 'Data berhasil disimpan');
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

    public function read(?int $id=null)
    {
        if ($id) {
            $mahasiswa = Mahasiswa::where('id', $id)->get();
            return view('data-mahasiswa', ['mahasiswa' => $mahasiswa]);
        }
        $mahasiswa = Mahasiswa::all();
        return view('data-mahasiswa', ['mahasiswas' => $mahasiswa]);
    }

    public function delete(Request $request){
        try {
            Mahasiswa::where('id', $request->id)->delete();
            return redirect()->to('mahasiswa')->with('alert', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            //
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }

}
