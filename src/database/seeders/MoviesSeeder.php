<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movies::create([
            'title' => 'Movie 1',
            'release_date' => '2022-01-01',
            'genre' => 'Action',
        ]);

        Movies::create([
            'title' => 'Movie 2',
            'release_date' => '2022-02-01',
            'genre' => 'Comedy',
        ]);

    }
}
