@extends('master')
@section('title', 'Login')


@section('content')

    {!! Form::open(['url' => 'auth/login', 'method' => 'post', 'class' => 'box box-auth']) !!}

        <h2 class="box-auth-heading">
            Login
        </h2>

        <div class="form-group">
            {{-- {!! Form::label('email', 'Email:') !!} --}}
            {!! Form::email('email', null, [
                'class' => 'form-control'
                'required' => true,
                'autofocus' => true,
            ]) !!}
        </div>

        <div class="form-group">
            {{-- {!! Form::label('password', 'Email:') !!} --}}
            {!! Form::email('password', null, [
                'class' => 'form-control'
                'required' => true,
            ]) !!}
        </div>

        <label class="checkbox">
            {!! Form::checkbox('remember', 'remember', true ) !!}
            Remember me
        </label>

        <div class="form-group">
            {!! Form::button('Login', [
                'type' => 'submit',
                'class' => 'btn btn-lg btn-primary -btn-block'
            ]) !!}
        </div>

        <p class="alt-action text-center">
            or <a href="{{ url(auth/register)}}">create account</a>
        </p>

    {!! Form::close() !!}
    
@endsection