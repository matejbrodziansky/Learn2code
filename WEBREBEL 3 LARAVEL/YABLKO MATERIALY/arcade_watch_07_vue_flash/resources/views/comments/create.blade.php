
@include('errors')

<form action="/comments" method="post" class="add-comment-form">
	@csrf

	<div class="field">
		<label class="label">
			be nice, dickhead
		</label>
		<div class="control">
			<textarea rows="3" class="textarea" name="text" placeholder="very nice words here"></textarea>
		</div>
	</div>

	<div class="control">
		<button class="button is-small is-warning">
			add comment
		</button>
	</div>

	<input type="hidden" name="post_id" value="{{ $post->id }}">
</form>
