<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Insert admin user langsung tanpa Factory
        DB::table('users')->insertOrIgnore([
            'name'       => 'Admin Amikom',
            'email'      => 'admin@amikom.ac.id',
            'role'       => 'admin',
            'password'   => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert categories
        DB::table('categories')->insertOrIgnore([
            ['name' => 'Seminar IT',    'slug' => 'seminar-it',    'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Entertainment', 'slug' => 'entertainment', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Workshop',      'slug' => 'workshop',      'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}