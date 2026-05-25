<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Menampilkan halaman detail event — dinamis dari DB
    public function show($id)
    {
        $event = Event::with('category')->findOrFail($id);
        return view('event-detail', compact('event'));
    }

    // Menampilkan halaman checkout
    public function checkout()
    {
        return view('checkout');
    }

    // Menampilkan halaman e-ticket
    public function ticket()
    {
        return view('ticket');
    }
}