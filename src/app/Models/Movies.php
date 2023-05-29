<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_date',
        'genre',
    ];

    protected $casts = [
        'release_date' => 'datetime:Y-m-d',
    ];

    public function movieDetail()
    {
        return $this->hasOne(MovieDetails::class);
    }

}
