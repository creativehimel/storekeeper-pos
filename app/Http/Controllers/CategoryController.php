<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('pages.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = 'category'.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/categories'), $imageName);
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName
        ]);
        if ($category){
            return redirect()->route('categories.index')->with('message', 'Category created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('pages.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ]);

        if ($category){
            return redirect()->route('categories.index')->with('message', 'Brand Data updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }
}
