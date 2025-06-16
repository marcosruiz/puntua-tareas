<script lang="ts">
export default {
    name: 'QuestionGroupEdit',
};
</script>

<script setup lang="ts">

import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import QuestionGroupForm from '@/components/questiongroups/Form.vue';

const props = defineProps({
    questionGroup: {
        type: Object,
        required: true,
    },
})

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Question Groups',
    href: '/question-groups',
  },
];

const form = useForm({
    title: props.questionGroup.title,
    description: props.questionGroup.description,
});

</script>

<template>

    <Head title="Edit Question Group" />

    <AppLayout :breadcrumbs="breadcrumbs">

        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <QuestionGroupForm :form="form" :updating="true" @submit="form.put(route('question-groups.update', questionGroup.id))"/>
        </div>

    </AppLayout>

</template>