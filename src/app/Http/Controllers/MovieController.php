<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieStore as MovieStoreRequest;
use App\Http\Requests\MovieUpdate as MovieUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Movies;
use Facades\App\Contracts\Services\{
    Movie as MovieService
};

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $movies = Movies::with('movieDetail')->get();
        return view('movie.index', compact('movies'));
    }

    /**
     * return that specific movie in detail
     */
    public function show($id)
    {
        $movie = Movies::find($id);
        if (!$movie) {
            abort(404);
        }

        return view('movie.show', compact('movie'));
    }

    public function create()
    {
        return view('movie.create');
    }

    public function store(MovieStoreRequest $request)
    {
        $result = MovieService::store($request->all());
        if ($result) {
            return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
        } else {
            return redirect()->back()->with('error', 'An error occurred while creating the movie.');
        }
    }

    public function edit($id)
    {
        $movie = Movies::findOrFail($id);
        return view('movie.edit', compact('movie'));
    }

    public function update(MovieUpdateRequest $request, $id)
    {
        $result = MovieService::update($id, $request->all());
        if ($result) {
            return redirect()->route('movie.detail', $result->id)->with('success', 'Movie updated successfully.');
        } else {
            return redirect()->back()->with('error', 'An error occurred while updating the movie. Please try again.');
        }
    }
}
