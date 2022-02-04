<article class="post">
	<header>
		<h2 class="title">
			<a href="">{{ $post->title }}</a>
		</h2>
	</header>

	<div class="content">
		<p>{!! nl2br($post->text) !!}</p>
	</div>

	<footer>
		<a class="author">
			@<strong>{{ $post->user->name }}</strong>
		</a>

		<a class="comments">
			{{ $post->comments->count() }} <strong>comments</strong>
		</a>

		{{-- <a class="comments">
			{{ $post->comments->count() }}
			<strong>{{ str_plural( 'comment', $post->comments->count()) }}</strong>
		</a> --}}
	</footer>
</article>