<template>
    <div id="app">
        <header></header>
        <main>
            <Sidebar  />
            <slot />
        </main>
        <footer></footer>
    </div>
</template>

<script setup>
import Sidebar from "./Sidebar.vue";
</script>
