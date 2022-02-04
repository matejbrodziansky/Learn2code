@extends('master')


@section('content')
    
    {!! Form::open([ 'url' => 'user/login', 'class' => 'box box-auth']) !!}
        <h2 class="box-auth-heading">
            Login
        </h2>

        {!! Form::email('email', null, [
            'class' => 'form-controll',
            'placeholder'=> 'Email@address',
            'required' => true,
            'autofocus' => true,
        ]) !!}

        {!! Form::password('password',  [
            'class' => 'form-controll',
            'placeholder'=> 'password',
            'required' => true,
        ]) !!}

        <label class="checkbox">
            {!! Form::checkbox('remeber', 'remember', true) !!}
            Remeber me
        </label>

        {!! Form::button('Login', [
            'type' => 'submit',
            'class' => 'btn btn-md btn-primary btn-block',
        ]) !!}

        <p class="alt-action text-center">
            or <a href="{{url('user/register') }}">create account</a>
        </p>

    {!! Form::close() !!}
    

    

@endsection
