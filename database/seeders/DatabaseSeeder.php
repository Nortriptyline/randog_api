<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dog;
use App\Models\Walk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $this->call([BreedSeeder::class]);

        \App\Models\User::factory()
            ->has(Walk::factory()->count(5))
            ->has(Dog::factory()->count(2))
            ->create([
                'name' => 'Mathieu',
                'email' => 'mathieu@leafu.fr',
            ]);
    }
}
