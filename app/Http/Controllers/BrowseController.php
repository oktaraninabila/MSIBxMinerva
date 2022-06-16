<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BrowseController extends Controller
{
    // public function home()
    // {
    //     return view('home');
    // }

    public function home()
    {
        $post = Post::all();

        return view('home', compact('post'));
    }

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

    public function category($id)
    {
        $category = Category::find($id);
        $post = Post::where('category_id', '=', $id)->paginate(8);
        return view('category', compact('category', 'post'));
    }

}
