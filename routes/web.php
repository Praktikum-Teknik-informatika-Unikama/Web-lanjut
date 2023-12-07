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

Route::get('/form/{id?}', [MahasiswaController::class, 'viewForm'])->name('form');


Route::get('/mahasiswa/{id?}', [MahasiswaController::class, 'read'])->name('getdata');
Route::post('/add-mahasiswa', [MahasiswaController::class, 'create'])->name('create');
Route::put('/update-mahasiswa/{id}', [MahasiswaController::class, 'create'])->name('update');
Route::delete('/delete-mahasiswa/{id}', [MahasiswaController::class, 'delete'])->name('delete');


