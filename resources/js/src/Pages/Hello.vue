<script setup>
import HelloWorld from '../components/HelloWorld.vue'
defineProps({
  title: String,
  description: String,
  user: Object
})
</script>

<template>
  <div>
    <a href="https://www.codeigniter.com/" target="_blank">
      <img src="/codeigniter.svg" class="logo" alt="Vite logo" />
    </a>
    <a href="https://vite.dev" target="_blank">
      <img src="/vite.svg" class="logo" alt="Vite logo" />
    </a>
    <a href="https://vuejs.org/" target="_blank">
      <img src="/vue.svg" class="logo vue" alt="Vue logo" />
    </a>
  </div>
  <h1>{{ title }}</h1>
  <HelloWorld :msg="description" :user="user" />
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}

.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}

.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
