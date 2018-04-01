import VueRouter from 'vue-router'

import { STORAGE_AUTH } from 'Admin/modules/auth/store/'
import Admin from 'Admin/components/Admin.vue'

import Login from 'Admin/modules/auth/views/Login.vue'
import Dashboard from 'Admin/modules/dashboard/views/Dashboard.vue'

import AdminEvent from 'Admin/modules/event/views/AdminEvent.vue'
import AdminEventAdd from 'Admin/modules/event/views/AdminEventAdd.vue'

const router =  new VueRouter({
    routes: [
        {
            path: '/',
            redirect: '/dashboard',
            component: Admin,
            name: 'Trang chủ',
            meta: { requiresAuth: true },
            children: [
                {
                    path: '/dashboard',
                    name: 'Quản lý',
                    component: Dashboard
                },
                {
                    name: 'Events',
                    path: '/events',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'Event list',
                            component: AdminEvent
                        },
                        {
                            path: 'add',
                            name: 'Add Event',
                            component: AdminEventAdd
                        },
                        // {
                        //     path: 'edit/:id',
                        //     name: 'Update Event',
                        //     component: AdminEventEdit
                        // }
                    ]
                },
            ]
        },
        {
            path: '/login',
            name: 'Đăng nhập',
            component: Login
        },
        // {
        //     path: '*',
        //     redirect: '/dashboard'
        // }
    ]

});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        const auth = JSON.parse(window.localStorage.getItem(STORAGE_AUTH)) || {};

        if (!auth || !auth.token || !auth.token.access_token) {
            return next({ path: '/login' })
        }
    }

    return next();
})

export default router;
