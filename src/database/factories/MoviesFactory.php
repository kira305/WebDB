<?php

namespace Database\Factories;

use App\Models\Movies;
use Illuminate\Database\Eloquent\Factories\Factory;

class MoviesFactory extends Factory
{
    protected $model = Movies::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'release_date' => $this->faker->date,
            'genre' => $this->faker->randomElement(['Action', 'Comedy', 'Drama', 'Horror', 'Romance']),
        ];
    }
}
