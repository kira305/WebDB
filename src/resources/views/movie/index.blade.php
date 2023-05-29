@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Movies</h1>

        <a href="{{ route('movie.create') }}" class="btn btn-primary mb-3">Create New</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->genre }}</td>
                        <td>{{ $movie->release_date->format('y/m/d') }}</td>
                        <td>
                            <a href="{{ route('movie.edit', $movie->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('movie.detail', $movie->id) }}" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
