{{-- @extends('layouts.app')

@section('content')
    <h1>Liste des Articles</h1>
    <ul>
       
        @foreach ($articles as $article)
            <li>
                <a href="{{Route('articles.show',$article)}}"><h1>{{$article['title']}}</h1></a>
                <p>{{$article['content']}}</p>
                <a href="{{Route('articles.edit',$article)}}">Modifier</a>
                <form action="{{Route('articles.destroy',$article)}}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection --}}
{{-- @extends('layouts.app')

@section('title', 'Liste des Articles')

@section('content')
    <h2>Liste des Articles</h2>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{Route('articles.show',$article)}}"><h1>{{$article['title']}}</h1></a>
                <p>{{$article['content']}}</p>
                <a href="{{Route('articles.edit',$article)}}">Modifier</a>
                <form action="{{Route('articles.destroy',$article)}}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection --}}
@extends('layouts.app')

@section('content')
    <h2>Liste des Articles</h2>
    @foreach ($articles as $article)
        <x-article-card :article="$article" />
    @endforeach
@endsection
@section('sidebar')
    <h3>Catégories</h3>
    <ul>
        <li>Laravel</li>
        <li>PHP</li>
        <li>Programmation Web</li>
    </ul>
@endsection
