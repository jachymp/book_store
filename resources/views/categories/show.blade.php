@extends('common/layout')

@section('content')
    <h2>{{$category->name}}</h2>

    <p>Books</p>
    @foreach ($category->books as $book)
        <li>{{$book->title}}</li>
    @endforeach

    <form action="/categories/{{$category->id}}/delete" method="post">
        @csrf
        @method('delete')
        <button>Delete category</button>
    </form>

@endsection