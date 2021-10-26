@extends('common/layout')

@section('content')
    <h3>List of publishers:</h3>
    <ul>
        @foreach ($publishers as $publisher)
            <li>{{$publisher->title}}</li>
            <button><a href="/publishers/{{$publisher->id}}">Detail</a></button>
        @endforeach
    </ul>
@endsection
    
