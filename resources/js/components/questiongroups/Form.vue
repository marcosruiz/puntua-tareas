<script lang="ts">
export default {
    name: 'QuestionGroupForm',
};
</script>

<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { Input } from '@/components/ui/input';
import { Button } from '@/components/ui/button';
import AppLayout from '@/layouts/AppLayout.vue';

defineProps({
    form: {
        type: Object,
        required: true,
    },
    updating: {
        type: Boolean,
        requited: false,
        default: false,
    },
});

defineEmits(['submit']);

</script>

<template>
        <form @submit.prevent="$emit('submit')">
            <h2>{{ updating ? 'Update Question Group' : 'Create Question Group' }}</h2>
            <Input v-model="form.title" placeholder="Enter title" class="mt-4"/>
            <Input v-model="form.description" placeholder="Enter description" class="mt-4"/>
            <Button type="submit" class="mt-4">Enviar</Button>
        </form>
</template>