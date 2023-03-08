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

var center_rating = ref(0)

defineExpose({
    center_rating
})


const switchSelect = (event) => {
    center_rating = !!event.target.value;
}


const newData = computed(() => usePage().props.assessmentTools);

const receivedToolData = computed(() => usePage().props.receivedToolInfo);
// const tools_by_faci = computed(() => usePage().props.assessmentTools);

const routes = {
    '/': Home,
    '/assessment-tool': AssessmentTool
}

const tools_by_faci = ref([]);




</script>

<template>  
    <div class="mt-16">
        <label>Non-compliant</label>
        <input type="radio" name="center_rating" v-model="center_rating" value="0" />
        <label>Incomplete</label>
        <input type="radio" name="center_rating" v-model="center_rating" value="1" />
        <label>Complete</label>
        <input type="radio" name="center_rating" v-model="center_rating" value="2" /> 
    </div>      
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
