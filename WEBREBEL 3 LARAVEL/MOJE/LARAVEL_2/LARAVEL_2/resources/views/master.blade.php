<?php $segment = Request::segment(1) ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title', $title ?: 'Kickass Website')</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="css/animations.css">
</head>

{{-- <body class="{{ $selected = Request::segment(1) ?: 'home' }}"> --}}
    <body class="{{ $segment ?: 'home'}}">
{{-- @dump($selected) --}}
    <header class="site-header">
        <nav class="container">
            <ul class="menu">
                {{-- <li class="{{ (request()->segment(2) == 'cities') ? 'active' : '' }}">   --}}

                <li><a class=" {{$segment  ?: 'selected' }}" href="/">Home</a></li>
                <li><a class=" {{($segment == 'gallery' ) ? 'selected' : ''}}" href="gallery">Gallery</a></li>
                <li><a class=" {{($segment == 'blog' ) ? 'selected' : ''}}" href="blog">Blog</a></li>
                <li><a class=" {{($segment == 'contact') ? 'selected' : ''}}" href="contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <aside class="pre-footer">
        <div class="container">
            @section('aside')
                <h3>Buy our stuff</h3>

                <p>
                    This is a website, so obviously we are trying to sell you something.<br>
                    Click here, so we can send you emails you don't want!
                </p>

                <a href="#" class="btn btn-green">Stuff to delete from your inbox</a>
            @show
        </div>
    </aside>

    <footer class="site-footer">
        <div class="container">
            <p class="small">
                &copy; Kickass Website
                <span>
                    design straight stolen from
                    <a href="http://muz.li">muz.li</a>
                </span>
            </p>
        </div>
    </footer>

</body>

</html>
