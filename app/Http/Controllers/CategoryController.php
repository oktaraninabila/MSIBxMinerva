<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('category.index')->with('categories', $category);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        Alert::toast('Kategori Baru Berhasil Ditambahkan', 'success');
        return redirect()->route('categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit')->with('categories', $category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->name;
        $category->save();

        Alert::toast('Kategori Berhasil Disunting', 'success');
        return redirect()->route('categories');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        Alert::toast('Kategori Berhasil Dihapus', 'warning');
        return redirect()->route('categories');
    }

}
