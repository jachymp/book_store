@extends('common/layout')

@section('content')
<h3>List of published books:</h3>
<ul>
    @foreach ($books as $book)
        <li>{{$book->title}}</li>
    @endforeach

</ul>
    
@endsection