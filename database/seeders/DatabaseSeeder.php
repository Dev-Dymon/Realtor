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
        User::factory(50)->create();

        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@laravel.com',
        //     'usertype' => 'admin',
        //     'phone' => '07033999484',
        // ]);
    }
}
