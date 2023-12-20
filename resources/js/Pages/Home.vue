<template>
    <Layout>
        <h1>homepage</h1>
        <h2>{{ $page.props.auth.name }}</h2>
    </Layout>
</template>
<script setup>
import Layout from "../Components/Layout.vue";
// const props = defineProps({user : Object});
</script>
