@extends('base')

@section('content')
    <h1>Articles</h1>
    <div>
        @foreach($articles as $article)
            <div>
                <ul>
                    <li>{{ $article->title }}</li>
                    <li>{{ $article->auteur }}</li>
                    <li>{{ $article->contenu}}</li>
                </ul>
                <a href="{{route("show", ['article'=> $article])}}">Show</a>
                <a href="{{route("update", ['article'=> $article])}}">Update</a>
                <a href="{{route("delete", ['article'=> $article])}}">Delete</a>
            </div>
        @endforeach
            <a href="{{route("new")}}">Creer</a>
    </div>




@endsection
