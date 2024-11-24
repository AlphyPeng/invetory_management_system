import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import { createApp } from 'vue';
import router from './routes';


const app = createApp({});

app.use(router);
app.mount('#app');
