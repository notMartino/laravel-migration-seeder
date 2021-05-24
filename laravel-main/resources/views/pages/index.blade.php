@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Films</h1>

        <ul>
            @foreach ($movies as $movie)
                <li>
                    {{$movie['title']}}, {{$movie['original_title']}}, {{$movie['date']}}, {{$movie['vote']}}
                </li>
            @endforeach
        </ul>
    </main>
@endsection