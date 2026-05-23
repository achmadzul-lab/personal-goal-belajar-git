<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Menampilkan halaman laporan transaksi (Admin)
     */
    public function index()
    {
        return view('admin.transactions');
    }
}