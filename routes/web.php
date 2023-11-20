<?php


use App\Http\Controllers\HomeController;
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

// untuk home
Route::get('/',[HomeController::class, 'index']);
// untuk contact
Route::get('/contact',[HomeController::class, 'contact']);
// untuk about
Route::get('/about',[HomeController::class, 'about']);