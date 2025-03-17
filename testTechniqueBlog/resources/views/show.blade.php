@extends('base')
@section('title', $article->title)
@section('content')
    <p>{{$article->auteur}}</p>
    <br>
    <p>{{$article->contenu}}</p>
@endsection
