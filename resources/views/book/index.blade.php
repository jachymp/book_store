@extends('common/layout')

@section('content')

    <form action="/books/search" method="get">
        <label for="search_bar">Search book:</label>
        <input type="text" id="search_bar" name="search_bar">
        <input type="submit" value="Search">
    </form>

    @if (Session::has('success_message'))
 
    <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
 
    @endif

    <ul>
        @foreach ($books as $book)
            <li><a href="/books/{{$book->id}}">{{ $book->title }}</a></li>
        @endforeach
    </ul>

    {{ $books->links() }}
@endsection