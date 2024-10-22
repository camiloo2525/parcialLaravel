<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Crear categorías
        Category::factory()->count(5)->create();

        // Crear equipos
        Team::factory()->count(10)->create();
    }
}

