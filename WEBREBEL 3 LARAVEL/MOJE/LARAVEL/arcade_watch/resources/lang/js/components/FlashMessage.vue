<template>

	<transition name="fade">
		    <div class="alert-width" v-show="visible" >
      <div class="alert alert-success"  role="alert">
          <button @click="hide" type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <br>
          {{text}}
      </div>
    </div>
	</transition>

</template>


<script>
export default {
	props: ['text'],

	data() {
		return {
			visible: false,
			message: ''
		}
	},

	created() {
		if (this.text) {
			this.message = this.text
			this.show()
		}

		this.$root.$on('flash', message => {
			this.message = message
			this.show()
		})
	},

	methods: {
		show() {
			this.visible = true
			setTimeout(() => this.hide(), 3000)
		},

		hide() {
			this.visible = false
		}
	}
}
</script>


  <style>


.close{
  

  background: green;
  
}

  .alert {
    font-size: 1.2rem;
    width: 10em;
    position: fixed;
    right: 2em;
    bottom: 2em;
       
  }

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}


  </style>

