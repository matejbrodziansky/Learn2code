@extends('master')


@section('content')

	<section class="box">
		<article class="post full-post">

			<header class="post-header">
				<h1 class="box-heading">
					<a href="{{ URL::current() }}">{{ $post->title }}</a>

					<time datetime="{{ $post->datetime }}">
						<small>{{ $post->created_at }}</small>
					</time>
				</h1>
			</header>

			<div class="post-content">
				{!! $post->rich_text !!}

				<p class="written-by small">
					<small>- written by
						<a href="{{ url('user', $post->user_id) }}">{{ $post->user->email }}</a>
					</small>
				</p>
			</div>

			<footer class="post-footer">
				@include('partials.tags')
			</footer>

		</article>
	</section>

@endsection