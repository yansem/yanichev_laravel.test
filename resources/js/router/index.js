import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/cats',
            name: 'cat.index',
            component: () => import('../views/cat/Index.vue')
        },
        {
            path: '/breeds',
            name: 'breed.index',
            component: () => import('../views/breed/Index.vue')
        },
    ]
})

export default router
