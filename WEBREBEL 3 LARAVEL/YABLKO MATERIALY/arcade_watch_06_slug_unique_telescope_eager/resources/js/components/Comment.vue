<template>
	<article class="comment">

		<div
		    class="content"
		    :contenteditable="editing"
		    @dblclick="editing = true"
		    @blur="editing = false"
		>
			{{ comment.text }}
		</div>

		<footer class="meta">
			<a
			    href=""
			    class="author"
			>
				@<strong>user_{{ comment.user_id }}</strong>
			</a>
			<time
			    datetime=""
			    class="has-text-grey"
			>
				{{ comment.created_at }}
			</time>
		</footer>

	</article>
</template>



<script>
export default {
	props: ['comment'],
	data() {
		return {
			editing: false
		}
	}
}
</script>


<style lang="scss" scoped>
[contenteditable='true'] {
	border-bottom: 2px solid white !important;
	// padding-bottom: 0.5em;
}
</style>