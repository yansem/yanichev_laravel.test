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
            path: '/cats/create',
            name: 'cat.create',
            component: () => import('../views/cat/Create.vue')
        },
        {
            path: '/breeds',
            name: 'breed.index',
            component: () => import('../views/breed/Index.vue')
        },
        {
            path: '/breeds/create',
            name: 'breed.create',
            component: () => import('../views/breed/Create.vue')
        },
    ]
})

export default router
