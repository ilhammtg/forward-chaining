<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RuleSeeder;
use Database\Seeders\GejalaSeeder;
use Database\Seeders\SolusiSeeder;
use Database\Seeders\MasalahSeeder;

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
            GejalaSeeder::class,
            MasalahSeeder::class,
            SolusiSeeder::class,
            RuleSeeder::class,
        ]);
    }
}
