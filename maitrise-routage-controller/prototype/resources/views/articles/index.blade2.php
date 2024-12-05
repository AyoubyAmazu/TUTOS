@extends('layouts.app')
@section('content')
    <h1>Liste des Articles</h1>
    <a href="{{Route('articles.create')}}">Créer un nouvel article</a>
    <ul>
        <p>let s test</p>
        @foreach ($articles as $article)
            <li>
                <a href="{{Route('articles.show')}}"><h1>{{$article['title']}}</h1></a>
                <p>test test</p>
                <a href="{{Route('articles.edit')}}">Modifier</a>
                <form action="{{Route('articles.destroy')}}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
                
            </li>
        @endforeach
    </ul>
@endsection