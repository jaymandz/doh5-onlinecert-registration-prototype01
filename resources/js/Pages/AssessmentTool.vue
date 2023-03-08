<script setup>
import { Head } from '@inertiajs/vue3';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue';
import ChevronRight from '@/Svg/ChevronRight.vue';
import Goal from '@/Svg/Goal.vue';
import Button from '@/Components/Button.vue';
import Label from '@/Components/Label.vue';
import Textarea from '@/Components/Textarea.vue'
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

const fifthSetQuestionaire = [
    {
        id: 1,
        question: 'All patients undergo sputum microscopy by a qualified and trained microscopist.',
        subQuestion: [
            {
                id: 1,
                question: 'The TB DOTS center plans and implements policies and procedures for assuring the quality of sputum microscopy results.'
            },
            {
                id: 2,
                question: 'If sputum microscopy facilities are not available in the TB DOTS center, policies and procedures for referring patients to accessible centers are implemented and monitored for effectiveness.'
            },
            {
                id: 3,
                question: 'External providers of sputum microscopy are contracted based on policies and procedures that include accreditation status and the presence of quality control systems.'
            },
        ]
    },
    {
        id: 2,
        question: 'Policies and procedures for referring patients to accredited and accessible X-ray facilities are implemented and monitored for effectiveness.',
    },
    {
        id: 3,
        question: 'Policies and procedures for referring patients to an appropriately constituted and accessible TB Diagnostic Committee are implemented and monitored for effectiveness.',
    }
]

const sixthSetQuestionaire = [
    {
        id: 1,
        question: 'All treatment is consistent with the National Tuberculosis Program guidelines.',
    },
    {
        id: 2,
        question: 'Flow charts of patient management from entry to separation are used to facilitate quality care and are accessible to patients and staff.',
    },
    {
        id: 3,
        question: 'DOTS partners are selected and assigned based on predetermined criteria and procedures and these are accessible to patients and staff.',
    },
    {
        id: 4,
        question: 'Education is provided to all patients to help them understand their medical condition and prognosis and to encourage their adherence to the treatment regimen and health promotion / illness prevention activities.',
    },
    {
        id: 5,
        question: 'An appropriately comprehensive evaluation of the patient\'s clinical progress is made and documented at each visit.',
    },
    {
        id: 6,
        question: 'Policies and procedures for detecting treatment defaulters and getting them back into treatment are implemented and monitored for effectiveness.',
    },
]

const seventhSetQuestionaire = [
    {
        id: 1,
        question: 'The TB DOTS Center has developed and implemented policies and procedures for assuring a continuous supply of TB drugs to all its patients for the entire six months duration of therapy.',
    },
    {
        id: 2,
        question: 'The TB DOTS center maintains an appropriate buffer stock of anti-TB medications.',
    },
    {
        id: 3,
        question: 'The TB DOTS Center has developed and implemented policies and procedures for assuring the quality and safety of its TB drugs.',
    },
]

const eigthSetQuestionaire = [
    {
        id: 1,
        question: 'The TB DOTS center\'s policies and procedures are consistent with the organization\'s goals, statutory requirements, accepted standards, and  the TB DOTS center\'s community responsibilities.',
    },
    {
        id: 2,
        question: 'Policies and procedures for patient referral to other services are implemented and monitored for effectiveness.',
    },
    {
        id: 3,
        question: 'Patient default rates are monitored and policies and procedures are developed and implemented to improve default rates.  The policies and procedures are monitored for effectiveness.',
    },
    {
        id: 4,
        question: 'Policies and procedures for identifying and working with external groups in providing DOTS services are developed, implemented and monitored for effectiveness.',
    },
]

const ninthSetQuestionaire = [
    {
        id: 1,
        question: 'Each patient is uniquely identified from entry and throughout the course of management.',
    },
    {
        id: 2,
        question: 'The TB DOTS center maintains a database of patient records and related registries and enables the staff to easily access these databases.',
    },
    {
        id: 3,
        question: 'Policies and procedures for ensuring the security and confidentiality of patient information are developed, implemented and monitored for effectiveness.',
    },
    {
        id: 4,
        question: 'The TB DOTS center submits complete and accurate reports to all relevant agencies in a timely manner.',
    },
    {
        id: 5,
        question: 'The TB DOTS center regularly reviews its records to assess and improve performance.',
    },
]

const tenthSetQuestionaire = [
    {
        id: 1,
        question: 'An adequate number of qualified and appropriately trained personnel provide and are accountable for the following functions:',
        subQuestion: [
            {
                id: 1,
                question: 'Leadership, management and overall responsibility for the operations, resources and performance of the TB DOTS center'
            },
            {
                id: 2,
                question: 'Clinical patient care services'
            },
            {
                id: 3,
                question: 'Diagnostic services, including sputum microscopy'
            },
            {
                id: 4,
                question: 'Drug management'
            },
            {
                id: 5,
                question: 'Information management'
            },
            {
                id: 6,
                question: 'Financial management'
            },
        ]
    },
    {
        id: 2,
        question: 'Personnel follow clear job descriptions, responsibilities and accountabilities.',
    },
    {
        id: 3,
        question: 'All personnel are responsible for safety in the workplace and the quality of the service they deliver.',
    },
    {
        id: 4,
        question: 'Personnel receive up to date training based on training needs assessment.',
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

                                            <Rating set="first" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="firstSetQuestion in firstSetQuestionaire" :key="firstSetQuestion">
                                                    <h6 class="font-bold">1.{{ firstSetQuestion.id }} {{ firstSetQuestion.question }}</h6>

                                                    <Rating set="first" :id="firstSetQuestion.id" />
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

                                            <Rating set="second" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="secondSetQuestion in secondSetQuestionaire" :key="secondSetQuestion">
                                                    <h6 class="font-bold">2.{{ secondSetQuestion.id }} {{ secondSetQuestion.question }}</h6>

                                                    <Rating set="second" :id="secondSetQuestion.id" />
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

                                            <Rating set="third" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="thirdSetQuestion in thirdSetQuestionaire" :key="thirdSetQuestion">
                                                    <h6 class="font-bold">3.{{ thirdSetQuestion.id }} {{ thirdSetQuestion.question }}</h6>

                                                    <Rating set="third" :id="thirdSetQuestion.id" />
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

                                            <Rating set="fourth" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="fourthSetQuestion in fourthSetQuestionaire" :key="fourthSetQuestion">
                                                    <h6 class="font-bold">4.{{ fourthSetQuestion.id }} {{ fourthSetQuestion.question }}</h6>

                                                    <Rating set="fourth" :id="fourthSetQuestion.id" />
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
                                    <p>Standard 5: All patients have continuous access to accurate and reliable TB diagnostic tests.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">5. All patients have continuous access to accurate and reliable TB diagnostic tests.</h6>

                                            <Rating set="fifth" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="fifthSetQuestion in fifthSetQuestionaire" :key="fifthSetQuestion">
                                                    <h6 class="font-bold">5.{{ fifthSetQuestion.id }} {{ fifthSetQuestion.question }}</h6>

                                                    <Rating set="fifth" :id="fifthSetQuestion.id" />

                                                    <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                        <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="fifthSetSubQuestion in fifthSetQuestion.subQuestion" :key="fifthSetSubQuestion">
                                                            <h6 class="font-bold">5.1.{{ fifthSetSubQuestion.id }} {{ fifthSetSubQuestion.question }}</h6>

                                                            <Rating set="fifth-sub" :id="fifthSetSubQuestion.id" />
                                                        </li>
                                                    </ol>
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
                                    <p>Standard 6: A care plan is developed and followed for all patients.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">6. A care plan is developed and followed for all patients.</h6>

                                            <Rating set="sixth" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="sixthSetQuestion in sixthSetQuestionaire" :key="sixthSetQuestion">
                                                    <h6 class="font-bold">6.{{ sixthSetQuestion.id }} {{ sixthSetQuestion.question }}</h6>

                                                    <Rating set="sixth" :id="sixthSetQuestion.id" />
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
                                    <p>Standard 7: Patients have continuous access to safe and effective anti-TB medications throughout the duration of their treatment.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">7. Patients have continuous access to safe and effective anti-TB medications throughout the duration of their treatment.</h6>

                                            <Rating set="seventh" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="seventhSetQuestion in seventhSetQuestionaire" :key="seventhSetQuestion">
                                                    <h6 class="font-bold">7.{{ seventhSetQuestion.id }} {{ seventhSetQuestion.question }}</h6>

                                                    <Rating set="seventh" :id="seventhSetQuestion.id" />
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
                        <span class="font-semibold">The management and staff adhere to clear and collaboratively developed policies and procedures for the efficient operation of the TB DOTS center.</span>
                    </div>

                    <div class="w-full">
                        <div class="mx-auto w-full rounded-2xl bg-slate-50 p-1">
                            <Disclosure v-slot="{ open }">
                                <DisclosureButton :class="[open ? 'rounded-t-lg' : 'rounded-lg']" class="flex w-full justify-between items-center rounded-t-lg bg-white px-4 py-2 text-left text-sm font-medium text-green-900 hover:bg-green-200 focus:outline-none focus-visible:ring focus-visible:ring-green-500 focus-visible:ring-opacity-75">
                                    <p>Standard 8: Policies and procedures for providing care to patients are developed, disseminated, implemented and monitored for effectiveness.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">8. Policies and procedures for providing care to patients are developed, disseminated, implemented and monitored for effectiveness.</h6>

                                            <Rating set="eigth" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="eigthSetQuestion in eigthSetQuestionaire" :key="eigthSetQuestion">
                                                    <h6 class="font-bold">8.{{ eigthSetQuestion.id }} {{ eigthSetQuestion.question }}</h6>

                                                    <Rating set="eigth" :id="eigthSetQuestion.id" />
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
                                    <p>Standard 9: Policies and procedures for managing patient information are developed, disseminated, implemented and monitored for effectiveness.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">9. Policies and procedures for managing patient information are developed, disseminated, implemented and monitored for effectiveness.</h6>

                                            <Rating set="ninth" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="ninthSetQuestion in ninthSetQuestionaire" :key="ninthSetQuestion">
                                                    <h6 class="font-bold">6.{{ ninthSetQuestion.id }} {{ ninthSetQuestion.question }}</h6>

                                                    <Rating set="ninth" :id="ninthSetQuestion.id" />
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
                        <span class="font-semibold">The TB DOTS center staffs provide efficient and competent DOTS services.</span>
                    </div>

                    <div class="w-full">
                        <div class="mx-auto w-full rounded-2xl bg-slate-50 p-1">
                            <Disclosure v-slot="{ open }">
                                <DisclosureButton :class="[open ? 'rounded-t-lg' : 'rounded-lg']" class="flex w-full justify-between items-center rounded-t-lg bg-white px-4 py-2 text-left text-sm font-medium text-green-900 hover:bg-green-200 focus:outline-none focus-visible:ring focus-visible:ring-green-500 focus-visible:ring-opacity-75">
                                    <p>Standard 10: The TB DOTS Center has an adequate number of qualified personnel skilled in providing DOTS services.</p>
                                    <ChevronRight :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5 text-green-500" />
                                </DisclosureButton>

                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500 bg-white rounded-b-lg">
                                    <ol class="mx-8">
                                        <li class="text-sm mb-2">
                                            <h6 class="font-bold">10. The TB DOTS Center has an adequate number of qualified personnel skilled in providing DOTS services.</h6>

                                            <Rating set="fifth" id="0" />

                                            <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="tenthSetQuestion in tenthSetQuestionaire" :key="tenthSetQuestion">
                                                    <h6 class="font-bold">10.{{ tenthSetQuestion.id }} {{ tenthSetQuestion.question }}</h6>

                                                    <Rating set="tenth" :id="tenthSetQuestion.id" />

                                                    <ol class="flex flex-col space-y-4 mx-8 mt-8">
                                                        <li class="text-sm bg-slate-50 p-4 rounded-lg" v-for="tenthSetSubQuestion in tenthSetQuestion.subQuestion" :key="tenthSetSubQuestion">
                                                            <h6 class="font-bold">10.1.{{ tenthSetSubQuestion.id }} {{ tenthSetSubQuestion.question }}</h6>

                                                            <Rating set="tenth-sub" :id="tenthSetSubQuestion.id" />
                                                        </li>
                                                    </ol>
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
                    <Button class="w-28">Submit</Button>
                </div>
            </div>
        </div>
    </div>
</template>