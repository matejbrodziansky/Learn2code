@if ( Auth::check() )
	<nav class="navigation">
		<div class="btn-group btn-group-sm pull-left">
			<a href="{{ url('/') }}" class="btn btn-default"> all posts </a>
			<a href="{{ url('user/' . Auth::user()->id) }}" class="btn btn-default"> my posts </a>
			<a href="{{ url('posts/create') }}" class="btn btn-default"> add new </a>
		</div>
		<div class="btn-group btn-group-sm pull-right">
			<span class="username small">{{ Auth::user()->email }}</span>
			<a href="{{ url('auth/logout') }}" class="btn btn-default logout">logout</a>
		</div>
	</nav>
@endif