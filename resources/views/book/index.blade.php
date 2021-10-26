@extends('common/layout')

@section('content')

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