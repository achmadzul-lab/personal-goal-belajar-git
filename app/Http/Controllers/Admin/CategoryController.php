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
        // 1. Ambil input dari kolom search html (Soal 3)
        $search = $request->query('search');

        // 2. Saring data dengan klausa LIKE jika ada input pencarian (Soal 3)
        $categories = Category::when($search, function ($query, $search) {
            return $query->where('name', 'LIKE', "%{$search}%");
        })->get();

        // 3. Kirim data categories DAN search ke view index kategori (Mengatasi Error 500)
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