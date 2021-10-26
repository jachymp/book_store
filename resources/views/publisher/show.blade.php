@extends('common/layout')

@section('content')
<h2>{{$publisher->title}}</h2>
<h3>List of published books:</h3>
<ul>
    @foreach ($publisher->books as $book)
        <li>{{$book->title}}</li>
    @endforeach

</ul>
    
@endsection