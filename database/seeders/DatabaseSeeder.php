<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Module;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ModuleSeeder;
use Database\Seeders\ServersSeeder;
use Database\Seeders\UserAndPermissionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            UserAndPermissionSeeder::class,
            ServersSeeder::class,
            ModuleSeeder::class,
        ]);
    }
}
