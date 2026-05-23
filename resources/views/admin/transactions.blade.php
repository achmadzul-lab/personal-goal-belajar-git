@extends('layouts.admin')

@section('title', 'Laporan Transaksi')

@section('content')
<div class="max-w-7xl mx-auto">
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black">Laporan Transaksi</h1>
            <p class="text-slate-500 font-medium">Pantau arus kas dan penjualan tiket Anda.</p>
        </div>
        <div class="flex gap-4">
            <button class="px-6 py-3 border-2 border-slate-200 rounded-2xl font-bold hover:bg-white hover:border-indigo-600 transition">Ekspor Excel</button>
            <button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg">Unduh PDF</button>
        </div>
    </header>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                    <tr>
                        <th class="px-8 py-5">Nama Pembeli</th>
                        <th class="px-8 py-5">Event</th>
                        <th class="px-8 py-5">Status</th>
                        <th class="px-8 py-5 text-right">Total Bayar</th>
                    </tr>
                </thead>
                <tbody class="divide-y border-t">
                    {{-- Dummy Data --}}
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-8 py-6">
                            <p class="font-bold uppercase text-sm">Alex Johnson</p>
                            <p class="text-xs text-slate-400">alex@example.com</p>
                        </td>
                        <td class="px-8 py-6 font-medium text-slate-600">Jazz Night 2024</td>
                        <td class="px-8 py-6">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase">Success</span>
                        </td>
                        <td class="px-8 py-6 text-right font-black text-indigo-600">Rp 150.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection