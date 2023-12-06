<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/',[WelcomeController::class, 'index']);

Route::get('/add-mahasiswa/{id?}', [MahasiswaController::class, 'viewForm']);
Route::get('/mahasiswa', [MahasiswaController::class, 'read']);
Route::post('/mahasiswa', [MahasiswaController::class, 'create']);
