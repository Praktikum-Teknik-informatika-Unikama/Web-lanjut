<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create(Request $request, ?int $id = null)
    {
        try {
            if ($request->route()->getName() == "update") {

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

    public function viewForm(?int $id = null)
    {
        try {
            if ($id) {

                $mahasiswa = Mahasiswa::where('id', $id)->first();
                return view('pages.input-form', ['mahasiswa' => $mahasiswa]);
            }

            return view('pages.input-form', ['mahasiswa' => null]);
        } catch (\Exception $e) {
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }

    public function read(?int $id = null)
    {
        if ($id) {
            $mahasiswa = Mahasiswa::where('id', $id)->get();
            return view('pages.data-mahasiswa', ['mahasiswa' => $mahasiswa]);
        }

        $mahasiswa = Mahasiswa::all();
        return view('pages.data-mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function delete($id)
    {
        try {
            Mahasiswa::where('id', $id)->delete();
            return redirect()->to('mahasiswa')->with('alert', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            //
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }
}