<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index(){
        $data = Peserta::all();
        return view('data-peserta',compact('data'));
    }

    public function daftarwebinar(){
        return view('daftar-webinar');
    }

    public function insertdaftarwebinar(Request $request){
        Peserta::create($request->all());
        return redirect()-> route('daftarwebinar')->with('success', 'Selamat! Anda telah terdaftar dalam kursus ini');;
    }
}