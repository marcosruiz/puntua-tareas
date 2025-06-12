<script>
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
    <AppLayout>
        <div>
            {{ updating ? 'Update Question Group' : 'Create Question Group' }}
        </div>

        <Input v-model="form.title" placeholder="Enter title" />
        <Input v-model="form.description" placeholder="Enter description" />
        
    </AppLayout>
</template>