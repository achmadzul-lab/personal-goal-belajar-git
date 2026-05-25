@extends('layouts.app')

@section('title', 'AmikomEventHub - Temukan Event Seru!')

@section('content')

<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1 space-y-8">
        <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider">#1 Event Platform</span>
        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
            Temukan & Pesan <span class="text-indigo-600">Tiket Event</span> Impianmu.
        </h1>
        <p class="text-lg text-slate-500 max-w-lg leading-relaxed">
            Dari konser musik hingga workshop teknologi, semua ada di genggamanmu. Pesan aman & cepat.
        </p>
        <div class="flex gap-4">
            <a href="#events" class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-xl shadow-indigo-200 hover:scale-105 transition-transform">
                Mulai Jelajah
            </a>
            <a href="{{ route('bantuan') }}" class="px-8 py-4 border-2 border-slate-200 rounded-2xl font-bold text-lg hover:border-indigo-600 hover:text-indigo-600 transition">
                Cara Pesan
            </a>
        </div>
    </div>
    <div class="flex-1 relative">
        <img src="{{ asset('assets/concert.png') }}" alt="Concert"
            class="rounded-[2rem] shadow-2xl relative z-10 w-full object-cover aspect-[4/5] object-center">
    </div>
</section>

{{-- Event Terdekat — Dinamis dari Database --}}
<section id="events" class="max-w-7xl mx-auto px-6 py-20">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="text-3xl font-extrabold mb-2">Event Terdekat</h2>
            <p class="text-slate-500 font-medium">Jangan sampai ketinggalan acara seru minggu ini!</p>
        </div>
    </div>

    @if($events->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($events as $event)
        <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden">
            <div class="relative overflow-hidden aspect-[3/4]">
                @if($event->poster_path)
                <img src="{{ asset('storage/' . $event->poster_path) }}"
                    alt="{{ $event->title }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    onerror="this.src='{{ asset('assets/concert.png') }}'">
                @else
                <img src="{{ asset('assets/concert.png') }}"
                    alt="{{ $event->title }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                @endif
                <div class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                    {{ $event->category->name ?? 'Event' }}
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition">{{ $event->title }}</h3>
                <div class="flex items-center gap-2 text-slate-500 text-sm mb-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>{{ \Carbon\Carbon::parse($event->date)->format('d M Y, H:i') }}</span>
                </div>
                <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>{{ $event->location }}</span>
                </div>
                <div class="flex justify-between items-center pt-4 border-t">
                    <span class="text-2xl font-black text-indigo-600">
                        Rp {{ number_format($event->price, 0, ',', '.') }}
                    </span>
                    <a href="{{ route('events.show', $event->id) }}"
                        class="px-5 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-600 hover:text-white transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="text-center py-16 text-slate-400 font-medium">
        Belum ada event tersedia saat ini.
    </div>
    @endif
</section>

{{-- SOAL 4: Kategori Platform --}}
<section class="max-w-7xl mx-auto px-6 py-16 border-t border-slate-100">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-extrabold mb-2">Kategori Event Kami</h2>
        <p class="text-slate-500 font-medium">Temukan event sesuai minat dan kebutuhanmu</p>
    </div>
    <div class="flex flex-wrap justify-center gap-4">
        @forelse($categories as $category)
        <div class="px-6 py-3 bg-indigo-50 text-indigo-700 rounded-2xl font-bold text-sm hover:bg-indigo-600 hover:text-white transition cursor-default">
            {{ $category->name }}
        </div>
        @empty
        <p class="text-slate-400 font-medium">Belum ada kategori tersedia.</p>
        @endforelse
    </div>
</section>

{{-- SOAL 4: Daftar Partner --}}
{{-- SOAL 4: Daftar Partner --}}
<section class="max-w-7xl mx-auto px-6 py-16 border-t border-slate-100">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-extrabold mb-2">Partner Kami</h2>
        <p class="text-slate-500 font-medium">Didukung oleh berbagai organisasi dan perusahaan terpercaya</p>
    </div>

    @if($partners->count() > 0)
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
        @foreach($partners as $partner)
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition p-5 flex flex-col items-center justify-center gap-3 text-center h-40">
            
            {{-- PILIHAN 1: Jika admin mengisi URL Logo --}}
            @if(!empty($partner->logo_url))
                <div class="h-16 w-full flex items-center justify-center">
                    <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}" class="max-h-full max-w-full object-contain">
                </div>
            
            {{-- PILIHAN 2: Jika URL Logo kosong, otomatis pakai inisial huruf --}}
            @else
                <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center font-black text-lg uppercase">
                    {{ substr($partner->name, 0, 1) }}
                </div>
            @endif

            <p class="font-bold text-slate-800 text-sm mt-auto">{{ $partner->name }}</p>
        </div>
        @endforeach
    </div>
    @else
    <div class="text-center py-12 text-slate-400 font-medium">Belum ada partner yang terdaftar.</div>
    @endif
</section>

@endsection