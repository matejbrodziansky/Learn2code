// let's rock
import './bootstrap'

// components
import FlashMessage from './components/FlashMessage.vue'
// import CommentList from './components/CommentList.vue'
import Comment from './components/Comment.vue'

// vue me
const app = new Vue({
	el: '#app',
	components: {
		FlashMessage,
		Comment
	}
})
