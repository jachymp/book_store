@extends('common/layout')

@section('content')
    <h3>Add new author:</h3>

    @if ($author->id === null)
        <form action="/authors" method="post">
    @else
        <form action="/authors/{{$author->id}}" method="post">
        @method('put')
    @endif
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{old('name', $author->name)}}">
        <br>
        <br>
        <label for="bio">Bio:</label>
        <br>
        <textarea name="bio" id="bio" cols="30" rows="10">{{old('bio', $author->bio)}}</textarea>
        <br>
        <br>
        <input type="submit" value="Submit">

    </form>
@endsection