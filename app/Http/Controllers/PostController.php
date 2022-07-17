<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pesan;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    public function create()
    {
        $category = Category::all();
        return view('post.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'         => 'required',
            'category_id'   => 'required',
            'content'       => 'required'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->date = $request->date;
        $post->month = $request->month;
        $post->time = $request->time;
        $post->price = $request->price;
        
        
        $image_path = "";
        if($request->hasFile('featured')){
            $image = $request->featured;
            $image_name = time().$image->getClientOriginalName();
            $image->move('upload/post/', $image_name);
            $image_path = 'upload/post/'.$image_name;
        }

        $post->featured = $image_path;
        $post->save();

        return redirect()->route('post');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $category = Category::all();

        return view('post.edit', compact('post', 'category'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->date = $request->date;
        $post->month = $request->month;
        $post->time = $request->time;
        $post->price = $request->price;
        $post->save();

        return redirect()->route('post');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('post');
    }

    public function CategoryPost($id)
    {
        $post = Post::where('category_id', '=', $id)->paginate(8);
        return view('category', compact('post'));
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function kontakstore(Request $request)
    {
        $pesan = new Pesan();
        $pesan->name = $request->name;
        $pesan->email = $request->email;
        $pesan->subject = $request->subject;
        $pesan->message = $request->message;
        $pesan->save();

        Alert::success('Selamat!', 'Pesan Anda Berhasil Terkirim');
        return redirect()->route('kontak');
    }

    public function tentang()
    {
        return view('tentang-kami');
    }

    public function riwayat()
    {
        $post = Post::all();
        return view('riwayat', compact('post'));
    }

    
}
