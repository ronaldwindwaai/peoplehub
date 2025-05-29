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
        // Create admin user using the factory
        $admin = User::factory()->admin()->create();
        $admin->assignRole('admin');

        // Call other seeders
        $this->call([
            RoleSeeder::class,
            CountriesSeeder::class,
            StateSeeder::class,
        ]);
    }
}
