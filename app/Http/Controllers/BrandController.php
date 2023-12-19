<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('pages.brand.index', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = 'brand'.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/brands'), $imageName);
        $brand = Brand::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName
        ]);

        if ($brand){
            return redirect()->route('brands.index')->with('message', 'Brand created successfully');
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
        $brand = Brand::where('id', $id)->first();
        return view('pages.brand.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ]);

        if ($brand){
            return redirect()->route('brands.index')->with('message', 'Brand Data updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::destroy($id);
        return redirect()->route('brands.index');
    }
}
