<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">



    <title>@yield('title', 'náhradný title')</title>
</head>

<body class="{{ Request::segment(1) ?: 'home' }}">

    <header class="container">

    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="container">

    </footer>

    {{-- <script src="{{ url('js/jquery.js')}}"></script>
    <script src="{{ url('js/app.js')}}"></script> --}}
    

</body>

</html>
