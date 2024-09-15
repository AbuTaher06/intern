<template>
    <div>
        <h1>To-Do List</h1>

        <!-- Create Task -->
        <form @submit.prevent="createTask">
            <input type="text" v-model="newTask" placeholder="Add a new task">
            <button type="submit">Add Task</button>
        </form>

        <!-- Task List -->
        <ul>
            <li v-for="task in tasks" :key="task.id">
                {{ task.title }}
                <button @click="deleteTask(task.id)">Delete</button>
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            tasks: [],
            newTask: ''
        };
    },
    mounted() {
        this.getTasks();
    },
    methods: {
        getTasks() {
            axios.get('/api/tasks')
                .then(response => {
                    this.tasks = response.data;
                })
                .catch(error => {
                    console.error('Error fetching tasks:', error);
                });
        },
        createTask() {
            axios.post('/api/tasks', {
                title: this.newTask
            })
            .then(response => {
                this.tasks.push(response.data);
                this.newTask = '';
            })
            .catch(error => {
                console.error('Error creating task:', error);
            });
        },
        deleteTask(id) {
            axios.delete(`/api/tasks/${id}`)
                .then(() => {
                    this.tasks = this.tasks.filter(task => task.id !== id);
                })
                .catch(error => {
                    console.error('Error deleting task:', error);
                });
        }
    }
}
</script>
