<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function input(){
        return view('form_input');
    }

    public function show(Request $request){
        $nama = $request->nama;
        $nim = $request->nim;
        $prodi = $request->prodi;
        return view('data_saya', ['nama'=>$nama, 'nim'=>$nim, 'prodi'=>$prodi]);
    }
}
