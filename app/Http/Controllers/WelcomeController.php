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
        return view('welcome');
    }
}
