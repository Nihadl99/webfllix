@extends('layouts.base')

@section('content')
   <ul>

   @foreach ($equipe as $user)
     <li><a href="/a-propos/{{nom}}">">{{nom}}</a></li>
       
   @endforeach
 

    
@endsection