<script lang="ts">
export default {
    name: 'CreateQuestionGroup',
};
</script>

<script setup lang="ts">

import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import QuestionGroupForm from '@/components/questiongroups/Form.vue';

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Question Groups',
    href: '/question-groups',
  },
];

const form = useForm({
    title: 'Titulo de prueba',
    description: 'Descripcion de prueba',
});

</script>

<template>

    <Head title="Question Groups" />

    <AppLayout :breadcrumbs="breadcrumbs">

        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <QuestionGroupForm :form="form" @submit="form.post(route('questiongroups.store'))"/>
        </div>

    </AppLayout>

</template>