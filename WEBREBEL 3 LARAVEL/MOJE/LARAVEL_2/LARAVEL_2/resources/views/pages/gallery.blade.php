@extends('master')

@section('content')
    <section class="content container">
        <h1 class="shadow">{{ $title }}</h1>
        <h2 class="shadow">It's got images in it.</h2>

        <div class="image-grid group">


            @forelse ($images as $img)
                <img src="{{ asset($img) }}" class="gallery-img" alt="ms marvel">
            @empty
                <p class="alert alert-danger">nothing to show :(</p>
            @endforelse
        </div>
    </section>
    {{-- @endsection --}}
@stop



@section('aside')

@parent

<p>I AM SPECIAL</p>
@stop


@section('footer')
<script>
    // alert('Hello')
</script>

@endsection
