@extends('common/layout')

@section('content')
    <h3>{{$book->title}}</h3>
    <p>Category: <a href="/categories/{{$book->category->id}}">{{$book->category->name}}</a></p>
    <p>Description: {{$book->description}}</p>
    
    <p>Author(s): 
    @foreach ($book->authors as $author)
        <li>{{$author->name}}</li>
    @endforeach
    </p>

    <img src={{$book->image}}>

    
    <form action="/books/{{$book->id}}/delete" method="post">
        @method('delete')
        @csrf
        <button>Delete book</button>
    </form>

    <form action="/books/{{$book->id}}/edit" method="get">
        <button>Update book</button>
    </form>
@endsection