<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Admin Utama
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert Kategori Event
        $category = Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $category2 = Category::firstOrCreate([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $category3 = Category::firstOrCreate([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);

        // 3. Insert Sampel Events
        // PERHATIKAN: Price dan Stock HANYA ANGKA, tanpa tanda petik jika perlu
        Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $category->id,
            'title' => 'Hackaton - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $category->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan bersama para ahli.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 75000,
            'stock' => 50,
            'poster_path' => 'posters/event-3.png',
        ]);
    }
}
