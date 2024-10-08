<script setup>
import {ref,computed} from "vue";
import store from "../store";
const test = computed(()=> store.state.test);
// export default {
//     name: 'App'
// };
</script>

<template>
    <div>
        <!--        <h1>Hello, Vue 3 with Laravel !!</h1>-->
        <h1 class="text-3xl font-bold stri bg-yellow-500">
            Not Found
        </h1>
    </div>
</template>

<style>
/* Add component styles here */
</style>