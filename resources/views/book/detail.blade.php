@extends('common/layout')


@section('content')

 @if (Session::has('success_message'))
 
    <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
 
    @endif


    <h3>{{$book->title}}</h3>
    {{-- <p>Category: <a href="/categories/{{$book->category->id}}">{{$book->category->name}}</a></p> --}}
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


    @foreach ($book->reviews as $review)
        <li> {{ $review->text }} - {{ $review->rating }}</li>
        
    @endforeach


    <form action="/books/{{$book->id}}/review" method="post">
        @csrf
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        <input type="number" name="rating">
        <input type="submit" value="Submit">
    </form>
@endsection