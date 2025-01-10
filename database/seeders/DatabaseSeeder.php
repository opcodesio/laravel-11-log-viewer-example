<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Let's create 100 random log entries
        for ($i = 0; $i < 100; $i++) {
            \Illuminate\Support\Facades\Log::log(['info', 'debug', 'warning', 'error'][random_int(0, 3)], 'Random log entry #' . $i);
        }

    }
}
