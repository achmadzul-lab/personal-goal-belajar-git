<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Pengecekan otomatis khusus untuk database SQLite di server Cloud
        if (config('database.default') === 'sqlite') {
            $dbPath = config('database.connections.sqlite.database');
            
            // 1. Jika file database.sqlite belum ada, buat filenya
            if (!file_exists($dbPath) && $dbPath !== ':memory:') {
                $directory = dirname($dbPath);
                if (!file_exists($directory)) {
                    mkdir($directory, 0755, true);
                }
                touch($dbPath);
            }

            // 2. Jika file sudah ada tapi tabel "categories" belum terbentuk, jalankan migrasi
            try {
                if (!Schema::hasTable('categories')) {
                    Artisan::call('migrate', ['--force' => true]);
                }
            } catch (\Exception $e) {
                // Mencegah aplikasi crash jika terjadi error pembacaan database di awal
            }
        }
    }
}