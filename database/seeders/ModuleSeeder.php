<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Servers;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $server = Servers::all();

        foreach ($server as $item) {
            for ($i = 1; $i <= 3; $i++) {
                Module::create([
                    'code' => Module::createCode(),
                    'name' => 'Module ' . $i,
                    'server_id' => $item->id,
                ]);
            }
        }
    }
}
