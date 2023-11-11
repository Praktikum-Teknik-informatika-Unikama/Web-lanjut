<?php
// sebagai penanda bahwa file ini bagian dari controllers
namespace App\Http\Controllers; 

// extends digunakan agar kita bisa mengakses semua fungsi / method didalam class 
// Controler
// untuk penulisan nama class harus sama dengan nama File    
class BlogController extends Controller 
{
    // isi dari BlogController
    public function index(){
        // versi pertama
        // return view('blog', ['nama'=>'Aufal', 'umur'=>20, 'nim'=>2134]);
        // versi kedua
        // $nama='Aufal';
        // $umur=20;
        // $nim=2134;
        // return view('blog', compact('nama', 'umur', 'nim'));
        // versi ketiga
        return view('blog')->with(['nama'=>'Aufal', 'umur'=>20, 'nim'=>2134]);
    }   

};    	

