@extends('layouts.app')

@section('content')
    <h1>{{$article['title']}}</h1>
    <p>{{$article['content']}}</p>
    <a href="{{Route('articles.index')}}">Retour à la liste</a>
@endsection