import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/login',
        component: () => import('./views/Auth/LoginPage.vue')
    },
];

const router = createRouter({
    history: createWebHistory(), // This enables history mode (no hash in the URL)
    routes
});

export default router;
