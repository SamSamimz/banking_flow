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
            'name' => 'Individual User',
            'email' => 'individual@gmail.com',
            'account_type' => 'Individual',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Business User',
            'email' => 'business@gmail.com',
            'account_type' => 'Business',
            'password' => bcrypt('password'),
        ]);

    }
}
