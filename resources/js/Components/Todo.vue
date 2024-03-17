<template>
    <div class="bg-gray-100 py-2 px-4 rounded flex flex-row space-x-4">
        <input
            type="checkbox"
            :true-value="1"
            v-model="todoForm.is_done"
            @change="save"
        />

        <!-- <p>{{ todo.task }}</p> -->
        <p>{{ todoForm.task }}</p>
        <button
            type="button"
            @click="deleteTodo"
        >
            X
        </button>
    </div>
</template>


<script setup>
    import { useForm } from "@inertiajs/vue3";

    // This time store a reference to props so we can pull in the defaults in the form
    const props = defineProps([
        'todo',
    ]);

    // Populate form defaults based on the prop data
    const todoForm = useForm({
        is_done: props.todo.is_done,
    });

    // Send an update request for the todo
    const save = () => {
        todoForm.put(`/todos/${ props.todo.id }`);
    };
    const deleteTodo = () => {
        todoForm.delete(`/todos/${ props.todo.id }`);
    }
</script>
