<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BrowseController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('jelajah', compact('post'));
    }
}
