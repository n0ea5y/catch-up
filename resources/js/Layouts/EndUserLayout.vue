
<script setup>
import Header from '@/Components/Header.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Header>
        <template v-slot="header">
            <div class="w-[500px] flex justify-around">
                <Link :href="route('enduser.top')">Top</Link>
                <Link :href="route('test')">工事一覧</Link>
                <Link :href="route('test')">工事追加</Link>
                <Link :href="route('test')">工事検索</Link>
            </div>
            <p class="mr-auto">ログイン者{{ $page.props.enduserAuth.user.name}}</p>
        </template>
    </Header>
    <slot></slot>

    
</template>