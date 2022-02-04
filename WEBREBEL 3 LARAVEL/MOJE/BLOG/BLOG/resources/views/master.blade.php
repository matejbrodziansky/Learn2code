<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') / BLOG</title>


    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    

</head>
<body>

    <header class="container">
		{{-- @include('flash::message') --}}

		@if (count($errors) > 0)
			<ul class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif

		@if( Auth::check() )
			<nav class="navigation">
				<div class="btn-group btn-group-sm pull-left">
					<a href="{{ url('/') }}" class="btn btn-default"> all posts </a>
					<a href="{{ url('user/' . Auth::id()) }}" class="btn btn-default"> my posts </a>
					<a href="{{ url('post/create') }}" class="btn btn-default"> add new </a>
				</div>
				<div class="btn-group btn-group-sm pull-right">
					<span class="username small">{{ Auth::user()->email }}</span>
					<a href="{{ route('logout') }}" class="btn btn-default logout">logout</a>
				</div>
			</nav>
		@endif
	</header>
    
    <main>
        <div class="contaier">
            @yield('content')
        </div>
    </main>

    <script src="{{asset('js/query.js') }}"></script>
    <script src="{{asset('js/app.js') }}"></script>

</body>
</html>