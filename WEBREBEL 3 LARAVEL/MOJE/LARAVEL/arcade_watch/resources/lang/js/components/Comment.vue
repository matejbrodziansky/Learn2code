
<script>
import axios from 'axios'
export default {

	    props: ['comment-data'],
    mounted() {
        console.log(this.commentData)
    },

	data() {
		return {
			editing: false
		}
	},


	methods: {
		updateComment() {
			alert('SAVED!')
			this.editing = false
		},

		deleteComment(){
axios.delete('/comments/' + this.commentData.id)
  
axios.patch('/comments/' + this.commentData.id, {
    text: this.newText
})
	
	
}
</script>

<style lang="scss" scoped>
	[contenteditable='true'] {
		box-shadow: 0 2px 0 #fff;
		outline: none;

	}
</style>