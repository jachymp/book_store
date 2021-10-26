@extends('common/layout')

@section('content')
    <h3>Register new book</h3>

    @if ($book->id === null)
        <form action="/books" method="post">
    @else
        <form action="/books/{{$book->id}}" method="post">
        @method('put')
    @endif
    
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{old('title', $book->title)}}">
        <br>
        <br>
        <label for="categories">Select book category:</label>
        <br>
        <select name="categories" id="categories">
            <option value="">-- please select category --</option>
            @foreach ($categories as $category)
                <option
                 value={{$category->id}}
                 {{old('categories', isset($book->category) ? $book->category->id : null) == $category->id ? 'selected': ''}}>
                 
                 {{$category->name}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <label for="description">Description:</label>
        <br>
        <textarea name="description" id="description" cols="30" rows="10">{{old('description', $book->description)}}</textarea>
        <br>
        <br>
        <input type="submit" value="Save">
    </form>
@endsection