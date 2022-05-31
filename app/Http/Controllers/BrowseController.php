<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BrowseController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('jelajah', compact('post'));
    }

    public function singlePost($id)
    {
        $post = Post::where('id', $id)->first();

        return view('detail-course', compact('post'));
    }
}
