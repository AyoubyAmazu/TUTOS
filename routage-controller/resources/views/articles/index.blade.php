@extends('layouts.app')

@section('content')
    <h1>Liste des Articles</h1>
    <a href="articles.create">Créer un nouvel article</a>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="articles.show"><h1>{{$article['title']}}</h1></a>
                <p>{{$article['content']}}</p>
                <a href="articles.edit">Modifier</a>
                <form action="articles.destroy" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection