<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/_posts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/_comments.css') }}" rel="stylesheet">
    <link href="{{ asset('css/_create.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header class="site-header">

        @include('navigation ')

        <h1 class="title logo">
            <a href="/">(ಠ_ಠ)</a>
            <a href="/">Matej Brodziansky</a>
        </h1>
    </header>


    <div id="app">
        <main>
            @yield('content')

            <flash-message text="{{ session('flash')}}" ></flash-message>
        </main>
    </div>   

        {{-- <example-component>awdadaojdpahfaopfhopfhapghaophgghapgapohgahgpaw</example-component>
        <flash-message>awdadaojdpahfaopfhopfhapghaophgghapgapohgahgpaw</flash-message> --}}
        

</body>
</html>
