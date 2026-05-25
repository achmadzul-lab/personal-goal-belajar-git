<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events     = Event::with('category')->latest()->get();
        $partners   = Partner::all();
        $categories = Category::all();

        return view('welcome', compact('events', 'partners', 'categories'));
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