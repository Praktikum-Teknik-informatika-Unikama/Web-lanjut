<?php

use App\Http\Controllers\HalloController;
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
// Route::get('/home',[WelcomeController::class, 'index']);
// Route::get('/welcome',[WelcomeController::class, 'welcome']);
// Route::post('/hallo',[WelcomeController::class, 'hallo']);

Route::resource('/anjay', WelcomeController::class);