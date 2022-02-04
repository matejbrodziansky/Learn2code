<template>

	<ol class="comment-list">
		<li
		    v-for="comment in comments"
		    :key="comment.id"
		>
			<comment :comment="comment"></comment>
		</li>
	</ol>

</template>


<script>
import Comment from './Comment.vue'

export default {
	components: {
		Comment
	},
	data() {
		return {
			comments: [
				{
					id: 1,
					post_id: 1,
					user_id: 1,
					text:
						'Voluptatem minus consequatur vel sunt labore maiores ut minus. Tempore aliquid rerum nesciunt consequatur.',
					created_at: '2019-04-21 13:08:37',
					updated_at: '2019-04-21 13:08:37'
				},
				{
					id: 2,
					post_id: 1,
					user_id: 1,
					text:
						'Ducimus et sed quia ea cum excepturi. Nisi optio quod vel qui. Sit sed voluptates rerum voluptatem ut commodi dolorem.',
					created_at: '2019-04-21 13:08:37',
					updated_at: '2019-04-21 13:08:37'
				},
				{
					id: 5,
					post_id: 1,
					user_id: 1,
					text:
						'Voluptatem aut impedit blanditiis iure animi deserunt. Voluptas consequatur totam natus illum accusantium mollitia magni.',
					created_at: '2019-04-21 13:08:37',
					updated_at: '2019-04-21 13:08:37'
				},
				{
					id: 7,
					post_id: 1,
					user_id: 2,
					text:
						'Pariatur quia animi et qui enim. Dolore illum ex id dolores assumenda architecto. Saepe sint quod molestias eveniet autem animi error omnis.',
					created_at: '2019-04-21 13:08:37',
					updated_at: '2019-04-21 13:08:37'
				}
			]
		}
	}
}
</script>


<style lang="scss" scoped>
</style>