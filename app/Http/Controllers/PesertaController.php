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
}