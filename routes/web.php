<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
//    return "Hello world";
    echo '<h1>Hello World</h1>';
});

Route::get('/praktikum', function(){
    return view('praktikum');
});

Route::get('/test', function(){
    return view('test', ["name"=>'aufal']);
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{name}', [BlogController::class, 'getName']);
Route::get('/daftar', [BlogController::class, 'daftar']);
Route::post('/proses', [BlogController::class, 'proses']);
