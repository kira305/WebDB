@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $movie->title }}</h1>
                <p><strong>Release Year:</strong> {{ $movie->release_date->format('Y/m/d') }}</p>
                <p><strong>Description:</strong> {{ $movie->movieDetail->description }}</p>
                <p><strong>Genre:</strong> {{ $movie->genre }}</p>
                <p><strong>Director:</strong> {{ $movie->movieDetail->director }}</p>
                <p>
                    <a href="{{ route('movie.edit', $movie->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('movies.index') }}" class="btn btn-secondary">Back to List</a>
                </p>
            </div>
        </div>
    </div>
@endsection
