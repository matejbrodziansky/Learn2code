@extends('master')


@section('title', 'Register')


@section('content')

	{!! Form::open([ 'route' => 'register', 'class' => 'box box-auth' ]) !!}

		<h2 class="box-auth-heading">
			Register
		</h2>

		{!! Form::text('name', null, [
			'class' => 'form-control',
			'placeholder' => 'name',
			'required' => true,
			'autofocus' => true,
		]) !!}

		{!! Form::email('email', null, [
			'class' => 'form-control',
			'placeholder' => 'email@address.com',
			'required' => true,
			'autofocus' => true,
		]) !!}

		{!! Form::password('password', [
			'class' => 'form-control',
			'placeholder' => 'password',
			'required' => true,
		]) !!}

		{!! Form::password('password_confirmation', [
			'class' => 'form-control',
			'placeholder' => 'password, again',
			'required' => true,
		]) !!}

		{!! Form::button('Register', [
			'type' => 'submit',
			'class' => 'btn btn-lg btn-primary btn-block'
		]) !!}

		<p class="alt-action text-center">
			or <a href="{{ route('login') }}">come inside</a>
		</p>

	{!! Form::close() !!}


	{{--<form method="post" action="{{ route('register') }}" class="box box-auth">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">

		<h2 class="box-auth-heading">
			Register
		</h2>

		<input type="name" value="{{ old('name') }}" class="form-control" name="name" placeholder="Email Address" required autofocus>
		<input type="email" value="{{ old('email') }}" class="form-control" name="email" placeholder="Email Address" required autofocus>
		<input type="password" class="form-control" name="password" placeholder="Password" required>
		<input type="password" class="form-control" name="repeat" placeholder="Password, AGAIN" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

		<p class="alt-action text-center">
			or <a href="{{ route('login') }}">come inside</a>
		</p>
	</form>--}}

@endsection