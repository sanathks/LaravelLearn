@extends('layout')

@section('content')

    <h1>My Favorites</h1>

    @foreach($songs as $song)
        <li><a href="songs/{{ $song->id }}">{{ $song->title }}</a></li>
    @endforeach

@stop