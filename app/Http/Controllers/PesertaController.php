<?php

namespace App\Http\Controllers;

use App\Exports\PesertaExport;
use App\Models\Peserta;
use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;

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

    public function grup()
    {
        return view('grup');
    }
    
    public function insertdaftarwebinar(Request $request){
        Peserta::create($request->all());
        alert()->html('Selamat! Anda Telah Terdaftar',"
        Selanjutnya silahkan bergabung di grup telegram pada link berikut,
        <a href='https://t.me/Grouppeserta'><b>klik di sini</b></a>
        ",'success');
        return redirect()-> route('grup');
    }

    public function excel(){
        return Excel::download(new PesertaExport, 'peserta.xlsx');
    }

    
}