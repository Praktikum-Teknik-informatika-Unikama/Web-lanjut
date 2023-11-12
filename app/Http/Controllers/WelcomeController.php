<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class WelcomeController extends Controller
{

    //
    public function index()
    {
        $mahasiswa = [
            ['nama' => 'aufal', 'umur' => 12, 'nim' => 2134],
            ['nama' => 'udin', 'umur' => 162, 'nim' => 234344]
        ];
        return view('home', ['mahasiswa' => $mahasiswa]);
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {   
        $date = Carbon::now();
        $nama = $request->nama;
        return "Hallo $nama Selamat datang di praktikum web lanjut $date";
    }

}
