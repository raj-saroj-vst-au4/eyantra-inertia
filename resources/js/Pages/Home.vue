<template>
    <Sidebar :user="$props.user"  />
</template>
<script setup>
import Sidebar from "@/components/Sidebar.vue";
const props = defineProps({user : Object});
</script>
