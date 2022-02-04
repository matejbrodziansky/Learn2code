
<comment inline-template :comment-data="{{ $comment }}">

	<article class="comment">
		<div
			v-text="commentData.text"

			class="content"
			ref="commentText"
			:contenteditable="editing"

			@blur="keepComment"
			@keydown.esc="keepComment"
			@keydown.enter="saveComment"
		></div>

		<footer class="meta">
			<a href="/users/{{ $comment->user->id }}" class="author">
				@<strong>{{ $comment->user->name }}</strong>
			</a>

			<time datetime="{{ $comment->created_at->toW3cString() }}" class="has-text-grey">
				{{ $comment->created_at->diffForHumans() }}
			</time>

			@can('update', $comment)
				<span class="controls has-text-grey">
					<a class="edit" @click="startEditing">edit</a>
					<a class="delete" @click="deleteComment">x</a>
				</span>
			@endcan
		</footer>
	</article>

</comment>


{{-- <div class="content"
	:contenteditable="editing"
	@dblclick="editing = true"
	@blur="editing = false"
>
	{{ $comment->text }}
</div> --}}
