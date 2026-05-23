@extends('layouts.admin')

@section('title', 'Manajemen Kategori - Admin')

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Manajemen Kategori</h1>
        <p class="text-slate-500 font-medium">Kelola daftar kategori event Anda di sini.</p>
    </div>
    <button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">
        + Tambah Kategori
    </button>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="px-8 py-6 bg-slate-50/50 border-b flex gap-4">
        <div class="relative flex-1">
            <span class="absolute inset-y-0 left-4 flex items-center text-slate-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </span>
            <input type="text" placeholder="Cari nama kategori..."
                class="w-full pl-12 pr-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4 w-16 text-center">No</th>
                    <th class="px-8 py-4">Nama Kategori</th>
                    <th class="px-8 py-4">Deskripsi</th>
                    <th class="px-8 py-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400 text-center">1</td>
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center font-bold text-sm">M</div>
                            <p class="font-black text-slate-800">Musik</p>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <p class="text-sm text-slate-500 font-medium">Konser, festival musik, dan pertunjukan seni suara live.</p>
                    </td>
                    <td class="px-8 py-6 text-center">
                        <div class="flex justify-center gap-2">
                            <button class="p-2.5 bg-yellow-50 text-yellow-600 rounded-xl hover:bg-yellow-500 hover:text-white transition shadow-sm" title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </button>
                            <button class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition shadow-sm" title="Hapus">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400 text-center">2</td>
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center font-bold text-sm">W</div>
                            <p class="font-black text-slate-800">Workshop</p>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <p class="text-sm text-slate-500 font-medium">Pelatihan skill, seminar edukasi, dan kelas intensif.</p>
                    </td>
                    <td class="px-8 py-6 text-center">
                        <div class="flex justify-center gap-2">
                            <button class="p-2.5 bg-yellow-50 text-yellow-600 rounded-xl hover:bg-yellow-500 hover:text-white transition shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </button>
                            <button class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400 text-center">3</td>
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center font-bold text-sm">T</div>
                            <p class="font-black text-slate-800">Teknologi</p>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <p class="text-sm text-slate-500 font-medium">Hackathon, konferensi IT, dan pameran inovasi digital.</p>
                    </td>
                    <td class="px-8 py-6 text-center">
                        <div class="flex justify-center gap-2">
                            <button class="p-2.5 bg-yellow-50 text-yellow-600 rounded-xl hover:bg-yellow-500 hover:text-white transition shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </button>
                            <button class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="px-8 py-6 bg-slate-50/50 border-t flex justify-between items-center">
        <p class="text-sm text-slate-500 font-medium">Menampilkan 3 kategori</p>
        <div class="flex gap-2">
            <button class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold opacity-50 cursor-not-allowed">Previous</button>
            <button class="px-4 py-2 bg-indigo-600 text-white rounded-xl shadow-md text-sm font-bold">1</button>
            <button class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold opacity-50 cursor-not-allowed">Next</button>
        </div>
    </div>
</div>
@endsection