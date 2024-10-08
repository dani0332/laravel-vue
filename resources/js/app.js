import './bootstrap';
import store from './store';
import { createApp } from 'vue';
import router from "./router/index.js";
import App from './components/App.vue';

createApp(App)
    .use(store)
    .use(router)
    .mount('#app');
