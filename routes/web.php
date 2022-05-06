<?php

use App\Http\Controllers\PesertaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/peserta/1',[PesertaController::class,'index'])->name('peserta'); 
Route::get('/1/daftar-webinar',[PesertaController::class,'daftarwebinar'])->name('daftarwebinar'); 
Route::post('/insertdaftarwebinar',[PesertaController::class,'insertdaftarwebinar'])->name('insertdaftarwebinar'); 

Route::get('/', function () {
    return view('main');
});

Route::get('/test', function () {
    return view('layouts.main');
});

Route::get('/browse', function () {
    return view('browse');
});

Route::get('/dashboard', function () {
    return view('admin');
});