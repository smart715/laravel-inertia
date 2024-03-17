<template>
    <div class="bg-gray-100 py-2 px-4 rounded flex flex-row space-x-4">
        <input type="checkbox" />

        <p>{{ todo.task }}</p>
    </div>
</template>


<script setup>
    defineProps([
        'todo',
    ]);
</script>
