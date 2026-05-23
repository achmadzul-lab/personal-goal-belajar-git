<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    // READ + SEARCH (Soal 1 & Soal 3)
    public function index(Request $request)
    {
        $search = $request->input('search');

        $categories = Category::when($search, function ($query, $search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })->latest()->get();

        return view('admin.categories.index', compact('categories', 'search'));
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Kategori "' . $request->name . '" berhasil ditambahkan!');
    }

    // UPDATE
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Kategori "' . $request->name . '" berhasil diperbarui!');
    }

    // DELETE
    public function destroy(Category $category)
    {
        $name = $category->name;
        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', 'Kategori "' . $name . '" berhasil dihapus!');
    }
}
