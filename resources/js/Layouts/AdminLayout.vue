<script setup>
import Header from '@/Components/Header.vue';
import { Head, Link } from '@inertiajs/vue3';
const test = () => {
    console.log('ログアウトクリック')

}
</script>

<template>
    <Header>
        <template v-slot="header">
            <div class="w-[500px] flex justify-around">
                <Link :href="route('admin.top')">Top</Link>
                <Link :href="route('test')">ユーザー管理</Link>
                <Link :href="route('test')">スタッフ管理</Link>
            </div>

            <Link :href="route('admin.logout')" class="ml-auto">
            ログイン者（管理者{{ $page.props.adminAuth.user.name }}）</Link>
        </template>
    </Header>
    <slot></slot>


</template>