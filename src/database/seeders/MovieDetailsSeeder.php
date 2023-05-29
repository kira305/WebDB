<?php

namespace Database\Seeders;

use App\Models\MovieDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         MovieDetails::create([
            'movies_id' => 1,
            'director' => 'Director 1',
            'description' => 'description 1',
        ]);

        MovieDetails::create([
            'movies_id' => 2,
            'director' => 'Director 2',
            'description' => 'description 2',
        ]);
    }
}
