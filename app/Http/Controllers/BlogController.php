<?php
// sebagai penanda bahwa file ini bagian dari controllers
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str; 


// extends digunakan agar kita bisa mengakses semua fungsi / method didalam class 
// Controler
// untuk penulisan nama class harus sama dengan nama File    
class BlogController extends Controller
{
    
    // isi dari BlogController
    public function index()
    {
        // versi pertama
        // return view('blog', ['nama'=>'Aufal', 'umur'=>20, 'nim'=>2134]);
        // versi kedua
        $nama= 'erer';
        $umur= 'erer';
        $nim=2134;
        return view('blog', compact('nama', 'umur', 'nim'));
        // versi ketiga

        // return view('blog')->with($this->data);
    }

    public function getName($nama)
    {
        return "Ini nama blognya $nama";
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function proses(Request $request)
    {
        $nama= Str::upper($request->nama);
        $umur= $request->umur;
        $nim=2134;
        return view('blog', compact('nama', 'umur', 'nim'));
    }
};
