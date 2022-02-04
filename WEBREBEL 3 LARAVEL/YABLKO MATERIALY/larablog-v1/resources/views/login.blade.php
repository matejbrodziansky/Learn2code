@extends('master')


@section('content')

	{!! Form::open([ 'route' => 'login', 'class' => 'box box-auth' ]) !!}

		<h2 class="box-auth-heading">
			Login
		</h2>

		{!! Form::email('email', null, [
			'class' => 'form-control',
			'placeholder' => 'Email Address',
			'required' => true,
			'autofocus' => true,
		]) !!}

		{!! Form::password('password', [
			'class' => 'form-control',
			'placeholder' => 'Password',
			'required' => true,
		]) !!}

		<label class="checkbox">
			{!! Form::checkbox('rememberMe', 'remember-me', true) !!}
			Remember me
		</label>

		{!! Form::button('Login', [
			'type' => 'submit',
			'class' => 'btn btn-lg btn-primary btn-block'
		]) !!}

		<p class="alt-action text-center">
			or <a href="{{ route('register') }}">create account</a>
		</p>

	{!! Form::close() !!}


	<form method="post" action="{{ route('login') }}" class="box box-auth">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">

		<h2 class="box-auth-heading">
			Login
		</h2>

		<input type="email" value="{{ old('email') }}" class="form-control" name="email" placeholder="Email Address" required autofocus>
		<input type="password" class="form-control" name="password" placeholder="Password" required>
		<label class="checkbox">
			<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe" checked>
			Remember me
		</label>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		<p class="alt-action text-center">
			or <a href="{{ route('register') }}">create account</a>
		</p>
	</form>

@endsection