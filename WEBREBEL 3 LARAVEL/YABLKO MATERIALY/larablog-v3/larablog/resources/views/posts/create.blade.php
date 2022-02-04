@extends('master')


@section('title', $title)


@section('content')

	<section class="box">
	{!! Form::open(['route' => 'posts.store', 'method' => 'post', 'class' => 'post', 'id' => 'add-form']) !!}

		@include('posts.form')

	{!! Form::close() !!}
	</section>

@endsection