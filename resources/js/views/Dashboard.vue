<template>
    <h3>Dashboard.vue</h3>
</template>


<script setup>
import { ref } from "vue"; // Import ref
import store from "../store";
import AdminLayout from "../components/Layouts/AdminLayout.vue";



const title = ref("Dashboard Title"); // Define title as a ref

console.log('store.user',store.state.user);

store.commit('setPageTitle',title)
console.log("Dashboard.vue");
</script>

<style>
/* Add component styles here */
</style>