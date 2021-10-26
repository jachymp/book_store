@extends('common/layout')

@section('content')
    <h3>{{$author->name}}</h3>
    <p>Bio: {{$author->bio}}</p>
    
    <p>Books: 
    @foreach ($author->books as $book)
        <li>{{$book->title}}</li>
    @endforeach
    </p>

    <form action="/authors/{{$author->id}}/delete" method="post">
        @csrf
        @method('delete')
        <button>Delete author</button>
    </form>

    <form action="/authors/{{$book->id}}/edit" method="get">
        <button>Update author</button>
    </form>
@endsection