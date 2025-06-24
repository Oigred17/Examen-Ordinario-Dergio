<script setup>
import { ref } from 'vue'

const count = ref(0)
</script>

<template>
  <div>
    <h2>Contador: {{ count }}</h2>
    <button @click="count--">Decrementar</button>
    <button @click="count++">Incrementar</button>
  </div>
</template>

<style scoped>
.read-the-docs {
  color: #888;
}
</style>
