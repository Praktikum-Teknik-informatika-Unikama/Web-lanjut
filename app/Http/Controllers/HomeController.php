<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    // Untuk view home
    public function index(){
        return view('home');
    }
    // Untuk view contact
    public function contact(){
        return view('contact');
    }
    // Untuk view about
    public function about(){
        return view('about');
    }
}
