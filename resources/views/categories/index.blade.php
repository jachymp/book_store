@extends('common/layout')

@section('content')
<p>List of categories:</p>
    @foreach ($categories as $category)
        <li><a href="/categories/{{$category->id}}">{{$category->name}}</a></li>
    @endforeach
@endsection