<script setup>
import { Head } from '@inertiajs/vue3';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue';
import ChevronRight from '@/Svg/ChevronRight.vue';
import Goal from '@/Svg/Goal.vue';
import Button from '@/Components/Button.vue';
import Label from '@/Components/Label.vue';
import Radio from '@/Components/Radio.vue'
import Rating from '@/Components/TBDOTS/Rating.vue'

const firstSetQuestionaire = [
    {
        id: 1,
        question: 'There is appropriate signage bearing the name of the TB DOTS center to assist patients accessing the center.',
    },
    {
        id: 2,
        question: 'Physical access is appropriate for the needs of patients.',
    },
    {
        id: 3,
        question: 'Entrances and exits are clearly marked and free of obstruction and other hazardous conditions.',
    },
    {
        id: 4,
        question: 'There are resources to inform patients of the daily and hourly schedule of TB DOTS services, ensure the quality of patient waiting.',
    },
]

const secondSetQuestionaire = [
    {
        id: 1,
        question: 'The TB DOTS center maintains a clean and wholesome environment within and immediately outside its premises.',
    },
    {
        id: 2,
        question: 'There are resources and processes to ensure the quality of patient waiting.',
    },
    {
        id: 3,
        question: 'The lighting in each area of the center is appropriate for the assigned purpose of the area.',
    },
    {
        id: 4,
        question: 'The privacy of the staff-patient encounter is assured.',
    },
]

const thirdSetQuestionaire = [
    {
        id: 1,
        question: 'There is adequate clean water for personal hygiene and sanitation purposes.',
    },
    {
        id: 2,
        question: 'The TB DOTS center maintains appropriate levels of cleanliness and antisepsis of all physical areas, equipment and instruments.',
    },
    {
        id: 3,
        question: 'General waste, sharps, pathological and infectious waste, pharmaceutical and chemical wastes are appropriately segregated, safely handled and disposed of according to accepted safe disposal practices.',
    },
    {
        id: 4,
        question: 'TB drugs are securely stored under appropriate storage conditions.',
    },
    {
        id: 5,
        question: 'Sputum and other body fluids are collected in a safe and hygienic way.',
    },
    {
        id: 6,
        question: 'There are documented, disseminated and implemented procedures to identify and address the risks of contamination of staff and patients from sources of infectious diseases.',
    },
]

const fourthSetQuestionaire = [
    {
        id: 1,
        question: 'Appropriate professionals obtain and document the relevant history for each patient.',
    },
    {
        id: 2,
        question: 'A physician completes and documents the relevant physical examination for each patient.',
    }
]
</script>

<template>
    <Head title="TB DOTS Assessment Tool" />

    <div class="relative sm:flex sm:justify-center min-h-screen bg-slate-50 dark:bg-gray-900 selection:bg-green-500 selection:text-white text-slate-700">
        <div class="py-8 w-full max-w-7xl">
            <h1 class="text-xl font-bold text-center mb-8">The PhilCAT Certification Self-assessment and Survey Tool</h1>
    
            <div class="flex flex-col space-y-6">
                <div>
                    <div class="flex items-center justify-start mb-2">
                        <Goal class="fill-green-600 mr-2" />
                        <span class="font-semibold">The TB DOTS Center provides a safe and effective physical environment to its staff and patients.</span>
                    </div>

                    <div class="w-full">
                        <div class="mx-auto w-full rounded-2xl bg-slate-50 p-1">
                            <Disclosure v-slot="{ open }">
                                <DisclosureButton :class="[open ? 'rounded-t-lg' : 'rounded-lg']" class="flex w-full justify-between items-center rounded-t-lg bg-white px-4 py-2 text-left text-sm font-medium text-green-900 hover:bg-green-200 focus:outline-none focus-visible:ring focus-visible:ring-green-500 focus-visible:ring-opacity-75">
                                    <p>Standard 1: The TB DOTS center is easily located and patients have convenient and safe access to the center.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">1. The TB DOTS center is easily located and patients have convenient and safe access to the center.</h6>

                                            <div class="grid mt-1">
                                                <div class="relative">
                                                    <Label value="Evidence of Progress and Achievements" />
                                                    <textarea class="appearance-none relative w-full block mt-1 px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm dark:bg-slate-800 dark:border-slate-700 dark:focus:border-green-700 dark:text-slate-300"></textarea>
                                                </div>

                                                <Rating set="first" id="0" />
                                            </div>

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="firstSetQuestion in firstSetQuestionaire" :key="firstSetQuestion">
                                                    <h6 class="font-bold">1.{{ firstSetQuestion.id }} {{ firstSetQuestion.question }}</h6>

                                                    <div class="grid mt-1">
                                                        <div class="relative">
                                                            <Label value="Evidence of Progress and Achievements" />
                                                            <textarea class="appearance-none relative w-full block mt-1 px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm dark:bg-slate-800 dark:border-slate-700 dark:focus:border-green-700 dark:text-slate-300"></textarea>
                                                        </div>

                                                        <Rating set="first" :id="firstSetQuestion.id" />
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </DisclosurePanel>
                            </Disclosure>
                        </div>

                        <div class="mx-auto w-full rounded-2xl bg-slate-50 p-1">
                            <Disclosure v-slot="{ open }">
                                <DisclosureButton :class="[open ? 'rounded-t-lg' : 'rounded-lg']" class="flex w-full justify-between items-center rounded-t-lg bg-white px-4 py-2 text-left text-sm font-medium text-green-900 hover:bg-green-200 focus:outline-none focus-visible:ring focus-visible:ring-green-500 focus-visible:ring-opacity-75">
                                    <p>Standard 2: The TB DOTS Center provides facilities for the comfort and privacy of its patients and staff.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">2. The TB DOTS Center provides facilities for the comfort and privacy of its patients and staff.</h6>

                                            <div class="grid mt-1">
                                                <div class="relative">
                                                    <Label value="Evidence of Progress and Achievements" />
                                                    <textarea class="appearance-none relative w-full block mt-1 px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm dark:bg-slate-800 dark:border-slate-700 dark:focus:border-green-700 dark:text-slate-300"></textarea>
                                                </div>

                                                <Rating set="second" id="0" />
                                            </div>

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="secondSetQuestion in secondSetQuestionaire" :key="secondSetQuestion">
                                                    <h6 class="font-bold">2.{{ secondSetQuestion.id }} {{ secondSetQuestion.question }}</h6>

                                                    <div class="grid mt-1">
                                                        <div class="relative">
                                                            <Label value="Evidence of Progress and Achievements" />
                                                            <textarea class="appearance-none relative w-full block mt-1 px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm dark:bg-slate-800 dark:border-slate-700 dark:focus:border-green-700 dark:text-slate-300"></textarea>
                                                        </div>

                                                        <Rating set="second" :id="secondSetQuestion.id" />
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </DisclosurePanel>
                            </Disclosure>
                        </div>

                        <div class="mx-auto w-full rounded-2xl bg-slate-50 p-1">
                            <Disclosure v-slot="{ open }">
                                <DisclosureButton :class="[open ? 'rounded-t-lg' : 'rounded-lg']" class="flex w-full justify-between items-center rounded-t-lg bg-white px-4 py-2 text-left text-sm font-medium text-green-900 hover:bg-green-200 focus:outline-none focus-visible:ring focus-visible:ring-green-500 focus-visible:ring-opacity-75">
                                    <p>Standard 3: The TB DOTS center provides for the safety of its patients and staff.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">3. The TB DOTS center provides for the safety of its patients and staff.</h6>

                                            <div class="grid mt-1">
                                                <div class="relative">
                                                    <Label value="Evidence of Progress and Achievements" />
                                                    <textarea class="appearance-none relative w-full block mt-1 px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm dark:bg-slate-800 dark:border-slate-700 dark:focus:border-green-700 dark:text-slate-300"></textarea>
                                                </div>

                                                <Rating set="third" id="0" />
                                            </div>

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="thirdSetQuestion in thirdSetQuestionaire" :key="thirdSetQuestion">
                                                    <h6 class="font-bold">3.{{ thirdSetQuestion.id }} {{ thirdSetQuestion.question }}</h6>

                                                    <div class="grid mt-1">
                                                        <div class="relative">
                                                            <Label value="Evidence of Progress and Achievements" />
                                                            <textarea class="appearance-none relative w-full block mt-1 px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm dark:bg-slate-800 dark:border-slate-700 dark:focus:border-green-700 dark:text-slate-300"></textarea>
                                                        </div>

                                                        <Rating set="third" :id="thirdSetQuestion.id" />
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </DisclosurePanel>
                            </Disclosure>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-start mb-2">
                        <Goal class="fill-green-600 mr-2" />
                        <span class="font-semibold">Patients receive adequate and effective diagnostic and therapeutic services at every phase of their management from screening for TB to rehabilitation.</span>
                    </div>

                    <div class="w-full">
                        <div class="mx-auto w-full rounded-2xl bg-slate-50 p-1">
                            <Disclosure v-slot="{ open }">
                                <DisclosureButton :class="[open ? 'rounded-t-lg' : 'rounded-lg']" class="flex w-full justify-between items-center rounded-t-lg bg-white px-4 py-2 text-left text-sm font-medium text-green-900 hover:bg-green-200 focus:outline-none focus-visible:ring focus-visible:ring-green-500 focus-visible:ring-opacity-75">
                                    <p>Standard 4: All patients undergo a comprehensive assessment to facilitate the planning and delivery of treatment.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">4. All patients undergo a comprehensive assessment to facilitate the planning and delivery of treatment.</h6>

                                            <div class="grid mt-1">
                                                <div class="relative">
                                                    <Label value="Evidence of Progress and Achievements" />
                                                    <textarea class="appearance-none relative w-full block mt-1 px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm dark:bg-slate-800 dark:border-slate-700 dark:focus:border-green-700 dark:text-slate-300"></textarea>
                                                </div>

                                                <Rating set="fourth" id="0" />
                                            </div>

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="fourthSetQuestion in fourthSetQuestionaire" :key="fourthSetQuestion">
                                                    <h6 class="font-bold">4.{{ fourthSetQuestion.id }} {{ fourthSetQuestion.question }}</h6>

                                                    <div class="grid mt-1">
                                                        <div class="relative">
                                                            <Label value="Evidence of Progress and Achievements" />
                                                            <textarea class="appearance-none relative w-full block mt-1 px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm dark:bg-slate-800 dark:border-slate-700 dark:focus:border-green-700 dark:text-slate-300"></textarea>
                                                        </div>

                                                        <Rating set="fourth" :id="fourthSetQuestion.id" />
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </DisclosurePanel>
                            </Disclosure>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <Button class="w-32">Submit</Button>
                </div>
            </div>
        </div>
    </div>
</template>