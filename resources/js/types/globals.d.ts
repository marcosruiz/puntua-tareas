import type { route as routeFn } from 'ziggy-js';

declare global {
    const route: typeof routeFn;
}

import { Page } from '@inertiajs/inertia'

declare module '@vue/runtime-core' {
  interface ComponentCustomProperties {
    $page: Page
  }
}