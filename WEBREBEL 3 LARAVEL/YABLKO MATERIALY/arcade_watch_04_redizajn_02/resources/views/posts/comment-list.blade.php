
<section id="comments" class="section comments columns is-centered">
	<ol class="is-size-5 column is-three-quarters">
		@foreach ($post->comments as $comment)
			<li>
				@include('posts.comment')
			</li>
		@endforeach
	</ol>
</section>