@extends('master')
@section('title', isset($title) ? $title : 'All the posts')


{{-- @dump($title); --}}

@section('content')


    <section class="box post-list">
        <h1 class="box-heading text-muted">
            {{ isset($title) ? $title : "this is a blog, fool"}}
        </h1>

        <p>
            @forelse ($posts as $post)
                <article id="{{ $post->id }}" class="post">
                    <header class="post-header"></header>
                    <h2>
                        <a href="{{ url('post', $post->id) }}">{{ $post->title }}</a>
                        <time>
                            <small>/ {{ $post->created_at }}</small>
                        </time>
                    </h2>

                    @include('patrials.tags')

                    
                    <div class="post-content">
                        <p>
                            {{ $post->teaser }}
                        </p>
                    </div>
                    <footer class="post-footer">
                        <a href="{{ url('post', $post->id) }} " class="read-more">read more</a>
                    </footer>
                </article>
            @empty

                <p>we got nothing</p>

            @endforelse
        </p>

    </section>

@endsection
