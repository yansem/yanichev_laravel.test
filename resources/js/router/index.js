import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/route1',
            name: 'route1',
            component: () => import('../views/Route1.vue')
        },
        {
            path: '/route2',
            name: 'route2',
            component: () => import('../views/Route2.vue')
        },
    ]
})

export default router
