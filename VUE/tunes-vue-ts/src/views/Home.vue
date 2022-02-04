<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/vuelogo.png" />

    <h1>{{title}}</h1>

    <p>
      Hot single in your area. <br>
      Hotter vue in your 
      <a href="https://v3.vuejs.org/">Documentation</a>
    </p>
  </div>
</template>



<script lang="ts">

export default {
  data() {
    return {
      title: 'Yay, Vue!'
    }
  }

}

</script>


<style lang="scss" scoped>
img {
  width: 45%;
}
h1 {
  margin-top: 0;
}
</style>


  <!--
// // <script lang="ts">
// import { defineComponent } from "vue";
// import HelloWorld from "@/components/HelloWorld.vue"; // @ is an alias to /src

// export default defineComponent({
//   name: "Home",
//   components: {
//     HelloWorld,
//   },
// });
// </script>   -->
