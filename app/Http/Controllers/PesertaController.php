<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PesertaController extends Controller
{
    public function index(){
        $data = Peserta::all();
        return view('data-peserta',compact('data'));
    }

    public function daftarwebinar()
    {
        $post = Post::all();
        return view('daftar-webinar', compact('post'));
    }

    public function insertdaftarwebinar(Request $request){
        Peserta::create($request->all());
        alert()->html('Selamat! Anda Telah Terdaftar',"
        Selanjutnya konfirmasi pembayaran pada link berikut,
        <a href='//github.com'><b>klik di sini</b></a>
        ",'success');
        return redirect()-> route('daftarwebinar');
    }
}