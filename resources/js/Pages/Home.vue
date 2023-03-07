<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
// import { Inertia } from '@inertiajs/inertia';
import Home from './Home.vue';
import AssessmentTool from './AssessmentTool.vue';
import { ref, onMounted } from 'vue'


const form = useForm({
    health_faci_code: null,
    selected_program: null
});

const program_list = ref([]);
const facility_list = ref([]);
const retrievedToolInfo = ref([]);


const test = (log1, log2) => {
    console.log(log1 + ' ' + log2);
}


const submit = () => {
    form.get(route('assessment-tool.retrieve'));
};

const routes = {
    '/': Home,
};

onMounted(() => {
    fetch('/programs').then(response => (
        response.json()
        ).then(response => (
           program_list.value = Object.values(response)
            // console.log(facilityTypes.value[0].facilityTypeName)
        )
    ));

    fetch('/facilities').then(response => (
        response.json()
        ).then(response => (
           facility_list.value = Object.values(response)
            // console.log(facilityTypes.value[0].facilityTypeName)
        )
    ));
});

const onChange = (event) => {
            console.log(event.target.value)
        }

</script>

<template>
    <GuestLayout>
    <Head title="Self-Assessment Tool" />
    <b>ASSESSMENT TOOL</b>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
     <!-- <AssessmentTool title="Hello world" :assessmentTools="$page.props.assessmentTools">
        {{ assessmentTools }}
     </AssessmentTool> -->
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Register</Link
                >
            </template>
        </div>
        <form @submit.prevent="submit"> 
        <div class="max-w-7xl mx-auto p-6 lg:p-8"> 
           
          
                <div class="mt-16">
                <div>
               
               <p>Facility Code</p>
                    <div class="inline-block relative w-full py-4 flex-1">
                        <select
                            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            v-model="form.health_faci_code"
                            @change="onChange($event)">
                            <option
                                v-for="item in facility_list"
                                :value="item.id"
                                :key="item.id"
                            >
                                {{ '[' + item.id + ']' + ' ' + item.health_faci_code }}
                            </option>
                    
                        </select>
                
                </div>
                    
            </div>
            <br/>
            <!-- <li v-for="fType in facilityTypes">
            {{ fType.facilityTypeName }}
            </li> -->
           
            <p>Program Name</p>
            <div class="inline-block relative w-full py-4 flex-1">
                <select
                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                v-model="form.selected_program"
                @change="onChange($event)"
                >
                <option
                    v-for="item in program_list"
                    :value="item.id"
                    :key="item.id"
                >
                    {{ '[' + item.id + ']' + ' ' + item.program_alias }}
                </option>
            
                </select>
          
            </div>

           

            <div class="flex items-center justify-end mt-4">
                <!-- <PrimaryButton class="ml-4" @click="test(facilityName, selectedFaciType)">
                    SEND
                </PrimaryButton> -->
                 <button type="submit">SEND</button>
            </div>
        </div> 
             
    </div>
        </form>   
    </div>
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
</style>
