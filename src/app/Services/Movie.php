<?php

namespace App\Services;

use App\Contracts\Services\Movie as MovieContract;
use App\Models\Movies;
use Facades\App\Contracts\Repositories\{
    Movie as MovieRepository
};

/**
 * 商品機能サービス
 */
class Movie implements MovieContract
{
    public function update(int $id, array $data): ?Movies
    {
        return MovieRepository::update($id, $data);
    }

    public function store(array $data): ?Movies
    {
        return MovieRepository::store($data);
    }
}
