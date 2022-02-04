@extends('master')


@section('title', 'About me')


@section('content')
	<div class="content">
		<h1 class="title">about</h1>
		<h2 class="text">{{ $text }}</h2>
	</div>
@stop


@section('scripts')
	<script>alert('hello')</script>
@stop