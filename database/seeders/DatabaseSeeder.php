<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insertOrIgnore([
            'name'       => 'Admin Amikom',
            'email'      => 'admin@amikom.ac.id',
            'role'       => 'admin',
            'password'   => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insertOrIgnore([
            ['name' => 'Seminar IT',     'slug' => 'seminar-it',     'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Entertainment',  'slug' => 'entertainment',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Workshop',       'slug' => 'workshop',       'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('events')->insert([
            [
                'category_id' => 2,
                'title'       => 'Jazz Night 2025',
                'description' => 'Nikmati malam dengan musik jazz.',
                'date'        => '2026-05-10 19:00:00',
                'location'    => 'Amikom Baru',
                'price'       => 50000,
                'stock'       => 100,
                'poster_path' => null,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => 1,
                'title'       => 'Hackathon Developer',
                'description' => 'Asah skill coding kamu.',
                'date'        => '2026-05-05 10:00:00',
                'location'    => 'Inkubator Amikom',
                'price'       => 50000,
                'stock'       => 100,
                'poster_path' => null,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => 1,
                'title'       => 'AI Future Summit',
                'description' => 'Teknologi AI masa depan.',
                'date'        => '2026-05-01 13:00:00',
                'location'    => 'Cinema Unit 6',
                'price'       => 50000,
                'stock'       => 100,
                'poster_path' => null,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}