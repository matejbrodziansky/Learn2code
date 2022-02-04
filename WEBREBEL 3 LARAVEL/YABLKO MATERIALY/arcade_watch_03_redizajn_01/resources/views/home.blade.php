@extends('layouts.master')


@section('content')

	<ol class="posts">
		@foreach ($posts as $post)
			<li>
				@include('article')
			</li>
		@endforeach
	</ol>

@endsection