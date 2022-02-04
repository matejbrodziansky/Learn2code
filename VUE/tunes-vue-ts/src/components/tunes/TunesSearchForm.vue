<template>
    <div>
        <form @submit.prevent="getMusic()">
            <input v-model="query"
              type="text">
        </form>
    </div>
</template>

<script lang="ts">
    // import Vue from 'vue'

    // export default Vue.extend({
        
    // })
    export default {
        data() {
            return {
                query: '' as string
            }
        },
      methods: {
            getMusic(): void {
                // alert(this.query)
				this.$root.$emit('new-songs-have-arrived', this.query)


                // this.songs.push({
                //     // id: this.songs.length + 1,
                //     id: Math.max(...this.songs.map(s => s.id)) + 1,
                //     artist: this.query,
                //     name: this.query,
                // })
            }
        }
    }   
</script>

<style lang="scss" scoped>
input {
	width: 100%;
	display: block;

	padding: {
		top: 0.5em;
		bottom: 0.5em;
		left: 2.95em;
		right: 0.75em;
	}

	color: #333;
	font-size: 1.5em;
	font-weight: 700;

	border: none;
	border-radius: 0.5em;
	background: white;
	box-sizing: border-box;

	outline: none;
	appearance: none;

	background: {
		image: url('../../assets/search.svg');
		repeat: no-repeat;
		position-y: 50%;
		position-x: 1em;
		color: white;
		size: 1em;
	}
}

@media screen and (max-width: 520px) {
	input {
		font-size: 1.15em;
	}
}
</style>