<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create(Request $request,?int $id=null)
    {
        try {
            if($request->route()->getName() == "update"){

                $mahasiswa = Mahasiswa::find($id);
                $mahasiswa->nama = $request->nama;
                $mahasiswa->nim = $request->nim;
                $mahasiswa->prodi = $request->prodi;
                $mahasiswa->save();
                return redirect()->to('mahasiswa')->with('alert', 'Data berhasil diupdate');
            }
            
            Mahasiswa::create([
                "nama" => $request->nama,
                "nim" => $request->nim,
                "prodi" => $request->prodi
            ]);

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
