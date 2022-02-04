@extends('layouts.master')


@section('content')

	@include('posts.article', [ 'type' => 'full' ])
	@include('posts.comment-list')

@endsection