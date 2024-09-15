import { createApp } from 'vue';
import ToDoComponent from './components/ToDoComponent.vue';

const app = createApp({});
app.component('to-do-component', ToDoComponent);
app.mount('#app');
