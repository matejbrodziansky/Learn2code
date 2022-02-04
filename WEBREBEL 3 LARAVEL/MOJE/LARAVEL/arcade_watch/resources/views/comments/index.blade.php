<section id="comments" class="section comments ">
    <div>
    
        @auth
             @include('comments.create')
        @endauth





        <ol class="comment-list">
            @foreach ($post->comments as $comment)
            <li>
                @include('comments.show')
            </li>
                
            @endforeach
        </ol>
    </div>
</section>