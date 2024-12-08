import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/',
        name: 'login',
        component: () => import('./views/Auth/LoginPage.vue')
    },
    {
        path: '/registration',
        name: 'registration',
        component: () => import('./views/Auth/RegisterPage.vue')
    },
];

const router = createRouter({
    history: createWebHistory(), // This enables history mode (no hash in the URL)
    routes
});

export default router;
