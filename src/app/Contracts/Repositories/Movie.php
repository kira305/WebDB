<?php

namespace App\Contracts\Repositories;
use App\Models\Movies;

/**
 * 動画サービスインターフェース
 *
 */
interface Movie
{
    public function update(int $id, Array $data): ?Movies;
    public function store(Array $data): ?Movies;
}
