@extends('master')


@section('content')

	<section class="box">
		{!! Form::open(['route' => 'post.create', 'method' => 'post', 'class' => 'post']) !!}

			<header class="post-header">
				<h1 class="box-heading">Add new post</h1>
			</header>

			{{-- Title Field --}}
			<div class="form-group">
			    {!! Form::text('title', null, [
			        'class' => 'form-control',
			        'placeholder' => 'title your shit'
			    ]) !!}
			</div>

			{{-- Text Field --}}
			<div class="form-group">
			    {!! Form::textarea('text', null, [
			        'class' => 'form-control',
			        'placeholder' => 'write your thing',
			        'rows'  => 16
			    ]) !!}
			</div>

			{{-- Tags Field --}}
			<div class="form-group">
				@foreach($tags as $tag)
				    <label class="checkbox">
				    	{!! Form::checkbox('tags[]', $tag->id) !!}
				    	{{ $tag->tag }}
				    </label>
				@endforeach
			</div>

			{{-- Add post Button --}}
			<div class="form-group">
			    {!! Form::button('Add post', [
			        'type' => 'submit',
			        'class' => 'btn btn-primary'
				]) !!}

				<span class="or">
					or {!! link_to('/', 'cancel') !!}
				</span>
			</div>

		{!! Form::close() !!}
	</section>

@endsection