<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Book project</title>
</head>
<body>
    @include('common/navigation')

    @if (Auth::check())
        <h1>Hello, {{Auth::user()->name}}</h1>
        {{Auth::id()}}
    @endif
    

    @include('common/errors')

    @yield('content')
    
</body>
</html>