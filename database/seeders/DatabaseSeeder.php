<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AdminSeeder::class, // 1st
            RolePermissionSeeder::class, // 2nd
            // CategorySeeder::class, // 3rd
            // ActivityLogSeeder::class, // 4th
            SettingSeeder::class, // 5th
            // EmailSettingSeeder::class, // 5th
        ]);
    }
}
