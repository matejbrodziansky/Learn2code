<template>
  <div>
    <ul>
      <li v-for="song in songs" :key="song.id">
        {{ song }}
      </li>
    </ul>

  </div>
</template>

<script lang="ts">
// import Vue from 'vue'

// export default Vue.extend({

// })

export default {


  data() {
    return {
      songs: [
        { id: 1, artist: "Great Artist", name: "Great Songs" },
        { id: 2, artist: "Awesome Artist", name: "Awesome Songs" },
        { id: 3, artist: "Hot Artist", name: "Hot Songs" },
      ],
    }
  },
	mounted(){
	this.$root.$on('new-songs-have-arrived', (newSong: string) => {
		                this.songs.push({
                    // id: this.songs.length + 1,
                    id: Math.max(...this.songs.map(s => s.id)) + 1,
                    artist: newSong,
                    name: newSong
                })
	})
	}

}




</script>

<style lang="scss" scoped>
.tunes-song {
  color: white;
  text-align: left;

  max-width: 24em;
  margin: 0 auto 2em;
  position: relative;

  box-sizing: border-box;
  background-color: #262626;
  border-radius: 0.75em;
}

.inside {
  padding: 1.35em 1.75em 1.75em;
}

h2 {
  font-size: inherit;
  line-height: 1.5em;
  margin: 0;
}

.player-wrapper {
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: space-between;
  margin-top: 1.5em;
}

img {
  width: 5em;
  border: 3px solid white;
  border-radius: 0.5em;
}

audio {
  outline: none;
  max-width: 14em;
}

audio::-webkit-media-controls-panel {
  background: #fff;
}

.meta {
  font-size: 0.75em;
  font-weight: 800;
  line-height: 1.5;
  color: rgba(255, 255, 255, 0.6);

  padding: 1.5em 2.25em;
  background: rgba(0, 0, 0, 0.2);
  border-bottom-left-radius: 1em;
  border-bottom-right-radius: 1em;
}

// responsive
@media screen and (max-width: 520px) {
  .player-wrapper {
    audio {
      margin-top: 1.5em;
    }

    flex-direction: column;
  }
}
</style>