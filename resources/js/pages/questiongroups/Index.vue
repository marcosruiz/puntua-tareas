<script setup lang="ts">

import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, usePage, Link, router } from '@inertiajs/vue3';
import { Folder, Trash, SquarePen, ArrowLeft, ArrowRight  } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Question Groups',
    href: '/question-groups',
  },
];

const page = usePage();

const props = defineProps({
  questionGroups: {
    type: Object,
    required: true,
  },
});

const deleteQuestionGroup = (id: number) => {
  if (confirm('Are you sure?')) {
    router.delete(route('question-groups.destroy', id));
  }
};

</script>

<template>

  <Head title="Question Groups" />

  <AppLayout :breadcrumbs="breadcrumbs">

    <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">

      <h2>Actions</h2>

      <div class="flex flex-row">
        <Link v-if="$page.props.user.permissions.includes('create questiongroup')" :href="route('question-groups.create')"
          class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]">
        Create question group
        </Link>
      </div>

      <h2>Category groups</h2>

      <ul role="list" class="divide-y divide-gray-100">
        <li v-for="group in questionGroups.data" :key="group.id" class="flex flex-col">
          <div class="flex justify-between gap-x-6 py-5">

            <div class="flex min-w-0 gap-x-4">
              <div class="size-12 flex-none rounded-full bg-gray-50 flex items-center justify-center">
                <Folder :size="24" />
              </div>
              <div class="min-w-0 flex-auto">
                <p class="text-sm/6 font-semibold text-gray-900">{{ group.title }}</p>
                <p class="mt-1 truncate text-xs/5 text-gray-500">Propietario ID: {{ group.user_id }}</p>
                <p class="mt-1 truncate text-xs/5 text-gray-500">Fecha de creación: {{ group.created_at }}</p>
              </div>

            </div>

            <div class="flex flex-row items-center justify-center gap-1">
              <Link v-if="$page.props.user.permissions.includes('update questiongroup')"
                :href="route('question-groups.edit', group.id)"
                class="rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b] flex flex-row items-center align-middle gap-2">
                <SquarePen :size="16" />
                Edit
              </Link>
              
              <Link v-if="$page.props.user.permissions.includes('delete questiongroup')"
                @click="deleteQuestionGroup(group.id)"
                class="rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-white bg-red-600 hover:bg-red-800 transition-all hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b] flex flex-row items-center align-middle gap-2">
                  <Trash :size="16" />
                  Delete
              </Link>
            </div>

          </div>

        </li>
      </ul>

      <div class="flex flex-row align-middle justify-between w-full">
        <Link v-if="questionGroups.current_page > 1" :href="questionGroups.prev_page_url"
          class="rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b] flex flex-row items-center align-middle gap-2">
          <ArrowLeft :size="16" />
          Previous
        </Link>
        <div></div>
        <Link v-if="questionGroups.current_page < questionGroups.last_page" :href="questionGroups.next_page_url"
          class="rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b] flex flex-row items-center align-middle gap-2">
          Next
          <ArrowRight :size="16" />
        </Link>
      </div>

    </div>

  </AppLayout>



</template>