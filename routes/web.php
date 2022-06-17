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
Route::get('/popup', function () {
    return view('popup');
});

Route::get('/data-course', function () {
    return view('data-course');
});

// Route::get('/grup', function () {
//     return view('grup');
// });

Route::get('/',[BrowseController::class,'home'])->name('home');

Route::get('/login',[AuthController::class,'login'])->name('login'); 
Route::post('/loginprocess',[AuthController::class,'loginprocess'])->name('loginprocess'); 
Route::get('/register',[AuthController::class,'register'])->name('register'); 
Route::post('/registeradmin',[AuthController::class,'registeradmin'])->name('registeradmin'); 
Route::get('/logout',[AuthController::class,'logout'])->name('logout'); 

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
Route::get('/kontak',[PostController::class,'kontak'])->name('kontak'); 
Route::get('/tentang-kami',[PostController::class,'tentang'])->name('tentang-kami');
Route::get('/riwayat',[PostController::class,'riwayat'])->name('riwayat'); 

// Route::get('/{id}',[BrowseController::class,'detail'])->name('detail'); 

Route::get('/dashboard',[AdminController::class,'admin'])->name('admin'); 
Route::get('/peserta/1',[PesertaController::class,'index'])->name('peserta'); 
Route::get('/daftar-webinar',[PesertaController::class,'daftarwebinar'])->name('daftarwebinar'); 
Route::post('/insertdaftarwebinar',[PesertaController::class,'insertdaftarwebinar'])->name('insertdaftarwebinar'); 
Route::get('/excel',[PesertaController::class,'excel'])->name('excel'); 
Route::get('/grup',[PesertaController::class,'grup'])->name('grup'); 

Route::get('/program-minerva/{id}',[BrowseController::class,'category'])->name('category-course');
Route::get('/program-minerva/1',[BrowseController::class,'category'])->name('category-1'); 
Route::get('/program-minerva/2',[BrowseController::class,'category'])->name('category-2'); 
Route::get('/program-minerva/3',[BrowseController::class,'category'])->name('category-3'); 

Route::get('/jelajah',[BrowseController::class,'index'])->name('jelajah'); 
Route::get('/{id}',[BrowseController::class,'singlePost'])->name('detail-course'); 
Route::get('/7',[BrowseController::class,'singlePost'])->name('detail-course-7');
Route::get('/11',[BrowseController::class,'singlePost'])->name('detail-course-11');




// Route::get('/detail-course', function () {
//     return view('detail-course');
// });

// Route::get('/kontak', function () {
//     return view('kontak');
// });

// Route::get('/tentang-kami', function () {
//     return view('tentang-kami');
// });



// Route::get('/main', function () {
//     return view('main');
// });

// Route::get('/test', function () {
//     return view('layouts.main');
// });

// Route::get('/browse', function () {
//     return view('browse');
// });

