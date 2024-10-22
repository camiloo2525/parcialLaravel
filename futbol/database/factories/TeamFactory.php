<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition()
    {
        return [
            'nombreEstadio' => $this->faker->company,
            'capacidadEstadio' => $this->faker->numberBetween(10000, 50000),
            'entrenador' => $this->faker->name,
            'patrocinador' => $this->faker->company,
            'equipoRival' => $this->faker->company,
            'añoFundacion' => $this->faker->year,
            'titulos' => $this->faker->numberBetween(0, 20),
            'historia' => $this->faker->text,
            'proximoPartido' => $this->faker->date(),
            'category_id' => \App\Models\Category::factory(), // Para enlazar la relación con categorías
        ];
    }
}

