<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
        $category = new Category();
        $category->name = $request->name;
        $category->save();

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

        return redirect()->route('categories');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories');
    }
}
