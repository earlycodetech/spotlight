<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriesController extends Controller
{
    public function create()
    {

        return view('categories.create');
    }

    public function  store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string|max:100|unique:categories,name",
            'description' => ['required', 'string', 'max:1000']
        ]);


        $slug = Str::slug($data['name']);

        Category::create([
            'title' => $request->input('name'),
            'description' => $request->input('description'),
            'slug' => $slug
        ]);

        Alert::success('Successfull', 'Category has been created');
        // return redirect('/');
        // return redirect()->route('categories.create');
        return back();
    }

    public function index()
    {
        $title = "All Categories - Spotlight";
        $categories = Category::all();
       
        return view('categories.index', compact('title', 'categories'));
    }
}
