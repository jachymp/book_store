@extends('common/layout')

@section('content')
    <h1>This is page about us!</h1>
    <p>We are producing high quality: {{$product}}</p>
    <p>We have started with testing in year {{$year}}. Our first tester was {{$author}}</p>
@endsection
    
