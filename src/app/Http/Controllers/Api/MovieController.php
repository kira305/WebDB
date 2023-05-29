<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movies;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Movies::query();
        $query->select(['title']);
        if ($search) {
            $query->where('title', 'like', "%{$search}%");
        }

        $movies = $query->get();

        return response()->json($movies);
    }
    /**
     * return that specific movie in detail
     */
    public function show($id)
    {
        $movie = Movies::find($id);

        if (!$movie) {
            return response()->json(['error' => 'Movie not found'], 404);
        }

        return response()->json($movie);
    }
}
