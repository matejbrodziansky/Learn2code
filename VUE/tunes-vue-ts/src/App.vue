<template>
  <div id="nav">
    <header>
      <the-navigation :brand="myCurse" />
    </header>

    <main class="content">
      <router-view />
    </main>

  </div>
</template>

<script>
import TheNavigation from "./components/Thenavigation.vue";

export default {

  components: {
    TheNavigation,
  },
};
</script>


d
<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>

<style src="./assets/scss/main.scss" lang="scss"></style>