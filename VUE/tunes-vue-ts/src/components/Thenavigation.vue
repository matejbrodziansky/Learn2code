<template>

    <nav class="navigation">
      <router-link to="/">Home</router-link> |
      <router-link to="/tunes">Tunes</router-link> |
      <router-link to="/about">About</router-link>
    </nav>

</template>


<style lang="scss" scoped>
    nav {
        margin: 2em auto 2.5em;
        padding:  0 1.25em;
        display: inline-block;

        vertical-align: middle;
        background: transparent;
        white-space: nowrap;

        border:  3px solid white;
        border-radius: 2.5em ;
    }

    a{
        color: white;
        font-size: 1.1em;
        font-weight: 800;
        text-decoration: none;

        cursor: pointer;
        padding: 0.575em 0.65em;
        display: inline-block;

        .router-link-active {
            color: #fffa0d;
        }
    }
//     .router-link-active{
//       background:red;
// }
    


</style>