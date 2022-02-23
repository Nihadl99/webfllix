@extends('layouts.base')

@section('content')
    <a href="/movies">Films</a>

    <div>
        @foreach ($movies as $movie)
            <div>
                <h2>{{ $movie->title }}</h2>
                

            </div>
        @endforeach
    </div>
@endsection