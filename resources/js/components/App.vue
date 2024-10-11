<script setup>
import {ref,computed} from "vue";

import store from "../store";
const test = computed(()=> store.state.test);
    // export default {
    //     name: 'App'
    // };
</script>

<template>
<!--    <h3>app.vue</h3>-->
    <router-view></router-view>
</template>

<style>
/* Add component styles here */
</style>