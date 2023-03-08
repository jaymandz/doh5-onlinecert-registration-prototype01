<script setup>
import Label from '@/Components/Label.vue';
import Radio from '@/Components/Radio.vue'

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
    <div class="flex flex-col mt-2">
        <Label value="DOTS Center Rating*" />
        <div class="flex items-center space-x-2 mt-1">
            <div class="relative flex items-center space-x-2">
                <Radio :id="set + '-none-achievement-' + id" />
                <Label :for="set + '-none-achievement-' + id" value="None Achievement" />
            </div>

            <div class="relative flex items-center space-x-2">
                <Radio :id="set + '-low-achievement-' + id" />
                <Label :for="set + '-low-achievement-' + id" value="Low Achievement" />
            </div>

            <div class="relative flex items-center space-x-2">
                <Radio :id="set + '-moderate-achievement-' + id" />
                <Label :for="set + '-moderate-achievement-' + id" value="Moderate Achievement" />
            </div>

            <div class="relative flex items-center space-x-2">
                <Radio :id="set + '-extensive-achievement-' + id" />
                <Label :for="set + '-extensive-achievement-' + id" value="Extensive Achievement" />
            </div>
        </div>
    </div>
</template>