<script setup>
import Label from '@/Components/Label.vue';
import Textarea from '@/Components/Textarea.vue';
import Radio from '@/Components/Radio.vue';

defineProps({
    id: {
        type: Number,
    },
    set: {
        type: String,
    }
});
</script>

<template>
    <div class="grid mt-1">
        <div class="relative">
            <Label value="Evidence of Progress and Achievements" />
            <Textarea />
        </div>

        <div class="flex flex-col mt-2">
            <Label value="DOTS Center Rating*" />
            <div class="flex items-center space-x-2 mt-1">
                <div class="relative flex items-center space-x-2">
                    <Radio :id="set + '-NA-' + id" />
                    <Label class="text-sm font-semibold" :for="set + '-NA-' + id" value="None Achievement" />
                </div>

                <div class="relative flex items-center space-x-2">
                    <Radio :id="set + '-LA-' + id" />
                    <Label class="text-sm font-semibold" :for="set + '-LA-' + id" value="Low Achievement" />
                </div>

                <div class="relative flex items-center space-x-2">
                    <Radio :id="set + '-MA-' + id" />
                    <Label class="text-sm font-semibold" :for="set + '-MA-' + id" value="Moderate Achievement" />
                </div>

                <div class="relative flex items-center space-x-2">
                    <Radio :id="set + '-EA-' + id" />
                    <Label class="text-sm font-semibold" :for="set + '-EA-' + id" value="Extensive Achievement" />
                </div>
            </div>
        </div>
    </div>
</template>