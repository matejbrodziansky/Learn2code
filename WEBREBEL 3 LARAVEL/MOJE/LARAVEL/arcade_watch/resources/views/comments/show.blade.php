<comment :comment-data="{{ $comment }}" inline-template>

    {{-- <p>{{$comment}}</p> --}}

    <article class="comment col-4 container">

        {{-- <code>{{$comment}}</code> --}}

        <div class="content" :contenteditable="editing">
            <p>
                {{ $comment->text }}
            </p>
        </div>
        <footer class="meta">
            <a href="/users/{{ $comment->user->id }}" class="author">
                @<strong> {{ $comment->user->name }}</strong>
            </a>
            <time datetime="{{ $comment->created_at->toW3cString() }}">
                {{ $comment->created_at->diffForHumans() }}
            </time>

            @can('update', $comment)
                <span class="controls">
                    <a class="edit"   @click="editing = true" >edit</a>
                    <a class="deletee" @click="deleteComment" >x</a>
                    {{-- <a class="edit"   v-on:click="editing = true" >edit</a> --}}
                    {{-- <a class="delete" v-on:click="deleteComment" >x</a> --}}
                    {{-- <a class="delete" v-on:click="say('what')">Say What</a> --}}
                </span>
            @endcan


        </footer>
    </article>

</comment>
