@extends('common/layout')

@section('content')
    @if (Session::has('success_message'))
 
    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>
 
    @endif    

    <h3>This is the list of authord stored in database:</h3>
    
        <ol>
            @foreach ($authors as $author)
                <li>
                    <a href=/authors/{{$author->id}}>{{$author->name}}</a>
                    <ul>
                        <li>
                            {{$author->bio}}
                        </li> 
                    </ul>
                </li>    
                          
            @endforeach

        </ol>
    
    
@endsection