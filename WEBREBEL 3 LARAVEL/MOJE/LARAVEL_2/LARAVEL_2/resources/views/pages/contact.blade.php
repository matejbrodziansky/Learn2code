@extends('master')

@section('title', 'Contact')

@section('content')

    <div class="content container">
        <h1 class="shadow">{{ $title }}</h1>

        <h2 class="shadow">
            We won't read it.
        </h2>

        
        @include('patrials.errors')

        @if ( session()->has('message'))
            @include('patrials.message', ['message' => session('message'), 'type' => 'succes'])
        @endif 


        

        {!! Form::open(['url' => 'contact', 'class']) !!}

            {{-- {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!} --}}
            {!! Form::label('name', 'Your name  (requered)') !!}
            {!! Form::text('name') !!}

            {{-- {!! $errors->first('email', '<p class="alert alert-danger">:message</p>') !!}            --}}
            {!! Form::label('email', 'Your email  (requered)') !!}
            {!! Form::email('email') !!}

            {!! Form::label('message', 'Your message') !!}
            {!! Form::textarea('message', null, ['cols' => 40, 'row' => 10]) !!}

            {!! Form::button('Send', ['type' => 'submit', 'class' => '']) !!}

        {!! Form::close() !!}


    @endsection
</div>
