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
import InputError from '../InputError.vue';

const props = defineProps({
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
    <h2>{{ updating ? 'Update Question Group' : 'Create Question Group' }}</h2>
        <form @submit.prevent="$emit('submit')">
            <Input id="title" v-model="form.title" placeholder="Ex: My title" class="mt-4"/>
            <InputError :message="$page.props.errors.title" class="mt-2"/>
            <Input id="description" v-model="form.description" placeholder="Ex: My description" class="mt-4"/>
            <InputError :message="$page.props.errors.description" class="mt-2"/>
            <Button type="submit" class="mt-4" v-if="!updating && $page.props.user.permissions.includes('create questiongroup')">Create</Button>
            <Button type="submit" class="mt-4" v-if="updating && $page.props.user.permissions.includes('update questiongroup')">Update</Button>
        </form>
</template>