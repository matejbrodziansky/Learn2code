@extends('layouts.master')



@section('content')

	<section class="columns is-centered">

		<div class="column is-three-fifths">
			<h1 class="title m-b-md">
				{{ $title }}
			</h1>

			<ul class="posts">
				@foreach ($posts as $post)
					<li>
						<h2>{{ $post->title }}</h2>
						<p>{{ $post->text }}</p>

						<small class="is-size-6">
							{{ $post->user->name }}
						</small>

						@foreach ($post->comments as $comment)
							<br>
							<em class="is-size-7">{{ $comment->text }}</em>
						@endforeach
					</li>
				@endforeach
			</ul>
		</div>

	</section>

@endsection



@section('sidebar')

	<p>to the side to the side</p>

@endsection
