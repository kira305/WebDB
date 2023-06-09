<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'movies_id',
        'director',
        'description',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
