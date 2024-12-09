<script setup>
    import {Link} from '@inertiajs/vue3';
    import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>
<template>
    <div class="flex items-center h-[80px] px-[50px] bg-sky-100 text-xl font-bold">
        <Link :href="route('admin.top')">
            <ApplicationLogo class="block h-9 w-auto mr-[10px] fill-current text-gray-800" />
        </Link>
        <slot></slot>
    </div>
</template>