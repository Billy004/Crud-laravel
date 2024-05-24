<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function index()
    {
        $categorie = Category::get();
        return view('categories.index', compact('categorie')); 
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255|string',
            'description'=>'required|max:255|string',
            'is_active'=>'sometimes'
        ]);

        Category::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'is_active'=> $request->is_active == true ? 1:0,
        ]);
        return redirect('categories/create')->with('status','Category Created');
    }
    public function edit(int $id)
    {
        $categorie = category::findOrFail($id);
        return view('categories.edit', compact('categorie'));
    }
}
