@extends('layout.base')

@section('content')
  <a href="/exercice/film/creer">Ajouter un film</a>

  <div>
      @foreach ($movies as $movie)
      <div>
          <h2>{{movie->title}}</h2>
          <a href="/exercice/film/{{$movie->id}}">Voir</a>
      </div>
          
      @endforeach
  </div>
    
@endsection