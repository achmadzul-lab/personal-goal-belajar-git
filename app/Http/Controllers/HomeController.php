<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Soal 4: Ambil data Partner & Category untuk public view
    public function index()
    {
        $partners   = Partner::all();
        $categories = Category::all();

        return view('welcome', compact('partners', 'categories'));
    }

    public function profil()
    {
        return view('profil');
    }

    public function katalog()
    {
        return view('katalog');
    }

    public function bantuan()
    {
        return view('bantuan');
    }

    public function kontak()
    {
        return view('contact');
    }
}