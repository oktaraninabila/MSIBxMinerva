<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/categories',[CategoryController::class,'index'])->name('categories'); 
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create'); 
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');  
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update'); 
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');   

Route::get('/post',[PostController::class,'index'])->name('post'); 
Route::get('/post/create',[PostController::class,'create'])->name('post.create'); 
Route::post('/post/store',[PostController::class,'store'])->name('post.store');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');  
Route::post('/post/update/{id}',[PostController::class,'update'])->name('post.update'); 
Route::get('/post/delete/{id}',[PostController::class,'delete'])->name('post.delete'); 

// Route::get('/{id}',[BrowseController::class,'detail'])->name('detail'); 

Route::get('/dashboard',[AdminController::class,'admin'])->name('admin'); 
Route::get('/peserta/1',[PesertaController::class,'index'])->name('peserta'); 
Route::get('/1/daftar-webinar',[PesertaController::class,'daftarwebinar'])->name('daftarwebinar'); 
Route::post('/insertdaftarwebinar',[PesertaController::class,'insertdaftarwebinar'])->name('insertdaftarwebinar'); 

Route::get('/jelajah',[BrowseController::class,'index'])->name('jelajah'); 
Route::get('/{id}',[BrowseController::class,'singlePost'])->name('detail-course'); 

// Route::get('/detail-course', function () {
//     return view('detail-course');
// });

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/login',[AuthController::class,'login'])->name('login'); 
Route::post('/loginprocess',[AuthController::class,'loginprocess'])->name('loginprocess'); 
Route::get('/register',[AuthController::class,'register'])->name('register'); 
Route::post('/registeradmin',[AuthController::class,'registeradmin'])->name('registeradmin'); 
Route::get('/logout',[AuthController::class,'logout'])->name('logout'); 

Route::get('/', function () {
    return view('home');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/test', function () {
    return view('layouts.main');
});

Route::get('/browse', function () {
    return view('browse');
});

Route::get('/data-course', function () {
    return view('data-course');
});