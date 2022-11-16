<script setup>
import {ref, computed} from "@vue/reactivity";
import { onBeforeMount } from "vue";
import store from "../store";

const categories = computed(()=> store.state.categories)

function getCategories(ev){
    ev.preventDefault();
    store.dispatch('getCategories')
}

onBeforeMount(() => store.dispatch('getCategories'));



</script>

<template>
    <!-- <button @click="getCategories" class="btn btn-light bg-red-300">Obtener Categorias</button> -->
    <ul>
        <li v-for="category in categories">{{category.name}}</li>
    </ul>
</template>

<style scoped>

</style>
