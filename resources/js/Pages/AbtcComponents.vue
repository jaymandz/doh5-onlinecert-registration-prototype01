<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import Home from './Home.vue';
import AssessmentTool from './AssessmentTool.vue';
import { computed } from 'vue';
import { ref, onMounted, watch } from 'vue';

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    tools: Object,
    facility_data: Object
});

// var ratingValues = ref({
//     center_rating: 0,
//     center_rating_sub: []
// })

var center_rating = ref()

defineExpose({
//    ratingValues,
    center_rating
})



const newData = computed(() => usePage().props.assessmentTools);

const receivedToolData = computed(() => usePage().props.receivedToolInfo);
// const tools_by_faci = computed(() => usePage().props.assessmentTools);

const routes = {
    '/': Home,
    '/assessment-tool': AssessmentTool
}



</script>

<template>  
    <label>Goal</label>
    <p>The TB DOTS center is easily located and patients have convenient and safe access to the center.</p>
      <label>Criterion</label>
    <p>The center is easily accessible inside the hospital premises through signages posted.</p>
     <InputLabel for="center_rating">Center Rating</InputLabel>
    <div class="mt-16">
        <input type="radio" name="center_rating" v-model="center_rating" value="0">Non-compliant
        <input type="radio" name="center_rating" v-model="center_rating" value="1">Incomplete
        <input type="radio" name="center_rating" v-model="center_rating" value="2">Complete
    </div>      
    <!-- <label>Standards are achieven when:</label>
    <p>There is appropriate signage bearing the name of the TB DOTS center to assist patients accessing the center.</p>
    <div class="mt-16">
        <input type="radio" name="center_rating_sub" v-model="center_rating_sub" value="0">Non-compliant
        <input type="radio" name="center_rating_sub" v-model="center_rating_sub" value="1">Incomplete
        <input type="radio" name="center_rating_sub" v-model="center_rating_sub" value="2">Complete
    </div>
    <p>Physical access is appropriate for the needs of patients.</p>
     <div class="mt-16">
        <input type="radio" name="center_rating_sub" v-model="center_rating_sub" value="0">Non-compliant
        <input type="radio" name="center_rating_sub" v-model="center_rating_sub" value="1">Incomplete
        <input type="radio" name="center_rating_sub" v-model="center_rating_sub" value="2">Complete
    </div>
    <p>Entrances and exits are clearly marked and free of obstruction and other hazardous conditions.</p>
     <div class="mt-16">
        <input type="radio" name="center_rating_sub" v-model="center_rating_sub" value="0">Non-compliant
        <input type="radio" name="center_rating_sub" v-model="center_rating_sub" value="1">Incomplete
        <input type="radio" name="center_rating_sub" v-model="center_rating_sub" value="2">Complete
    </div>
    <p>There are resources to inform patients of the daily and hourly schedule of TB DOTS services </p>
     <div class="mt-16">
        <input type="radio" name="center_rating" v-model="center_rating_sub" value="0">Non-compliant
        <input type="radio" name="center_rating" v-model="center_rating_sub" value="1">Incomplete
        <input type="radio" name="center_rating" v-model="center_rating_sub" value="2">Complete
    </div> -->
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
table, th, td {
  border: 1px solid black;
}
</style>
