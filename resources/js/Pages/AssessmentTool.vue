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
import AbtcComponents from './AbtcComponents.vue';



const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    tools: Object,
    facility_data: Object
});


const centerData = ref(0)

const form = useForm({
    evidence_of_progress: '',
    // center_rating: ''
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

// const onChange = (event) => {
//     centerData.value = 
// }


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
<GuestLayout>
   <Head title="Assessment Form"/>
   <form @submit.prevent="submit">
        <!-- <div class="max-w-7xl mx-auto p-6 lg:p-8"> -->
       
   
            <div class="mt-16">
               <b><label for="assessment-tool">ASSESSMENT TOOL</label></b><br/><br/><br/>
                <div>
                
                <label for="assessment-tool">Facility Name: {{facility_data.facility_name}} </label><br/><br/>
                <label for="assessment-tool">GOAL: {{tools.goal_criterion}} </label><br/><br/>
                <InputLabel for="evid_progress">Evidence of Progress and Achievements</InputLabel>
                <TextInput
                    id="email"
                    type="text"
                    class="mt-2 block w-full"
                    v-model="form.evidence_of_progress"
                />

                <!-- <InputError class="mt-2" :message="form.errors.email" /> -->
            </div>

            <div class="mt-4">
                <InputLabel for="center_rating">Center Rating</InputLabel>
                <AbtcComponents ref="centerData" />
                 {{ centerData }}
            </div>

           

            <div class="flex items-center justify-end mt-4">
            </div>
        <!-- </div> -->
             
    </div>

        
   </form>
   </GuestLayout>
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
