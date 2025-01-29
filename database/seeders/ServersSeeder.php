<?php

namespace Database\Seeders;

use App\Models\Servers;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servers::create([
            'code' => Servers::createCode(),
            'name' => 'Server 1',
        ]);
        Servers::create([
            'code' => Servers::createCode(),
            'name' => 'Server 2',
        ]);
        Servers::create([
            'code' => Servers::createCode(),
            'name' => 'Server 3',
        ]);
    }
}
