<template>
    <AdminLayout :open="true">
        <h1>Dashboard</h1>
    </AdminLayout>
</template>


<script setup>
import {ref, computed} from "vue";
import store from "../store";
import AdminLayout from "../components/Layouts/AdminLayout.vue";

const test = computed(() => store.state.test);


</script>

<style>
/* Add component styles here */
</style>