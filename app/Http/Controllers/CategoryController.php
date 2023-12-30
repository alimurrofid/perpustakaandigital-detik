<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Hapus categori!';
        $text = "Apakah anda yakin ingin menghapus categori ini?";
        confirmDelete($title, $text);
        return view('dashboard.category.index', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            Category::create([
                'name' => $request->validated('name'),
            ]);
            Alert::success('Success', 'Category created successfully');
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            Alert::error('Error', 'Category failed to create');
            return redirect()->route('category.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try {
            $category->update([
                'name' => $request->validated('name'),
            ]);
            Alert::success('Success', 'Category updated successfully');
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            Alert::error('Error', 'Category failed to update');
            return redirect()->route('category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            Alert::success('Success', 'Category deleted successfully');
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            Alert::error('Error', 'Category failed to delete');
            return redirect()->route('category.index');
        }
    }
}
