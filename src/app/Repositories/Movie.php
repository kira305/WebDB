<?php

namespace App\Repositories;

use App\Contracts\Repositories\Movie as MovieContract;
use App\Models\MovieDetails;
use App\Models\Movies;
use Illuminate\Support\Facades\DB;

/**
 * 商品機能サービス
 */
class Movie implements MovieContract
{
    public function update(int $id, array $data): ?Movies
    {
        $data = (object)$data;
        DB::beginTransaction();
        try {
            $movie = Movies::findOrFail($id);
            $movie->title = $data->title;
            $movie->release_date = $data->release_date;
            $movie->genre = $data->genre;
            $movie->save();

            $movieDetail = $movie->movieDetail;
            $movieDetail->description = $data->description;
            $movieDetail->director = $data->director;
            $movieDetail->save();

            DB::commit();

            return $movie;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function store(array $data): ?Movies
    {
        $data = (object)$data;
        try {
            DB::beginTransaction();

            $movie = Movies::create([
                'title' => $data->title,
                'release_date' =>  $data->release_date,
                'genre' =>  $data->genre,
            ]);

            $movieDetail = MovieDetails::create([
                'movies_id' => $movie->id,
                'director' =>  $data->director,
                'description' => $data->description,
            ]);

            DB::commit();

            return $movie;
        } catch (\Exception $e) {
            DB::rollback();
            return false;
        }
    }
}
