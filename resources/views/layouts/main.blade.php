<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{route('post.index')}}">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('post.main')}}">Main</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('post.contact')}}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('post.about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('post.create')}}">Create</a></li>

            </ul>
        </nav>
    </div>
    @yield('content')
</div>

</body>
</html>
