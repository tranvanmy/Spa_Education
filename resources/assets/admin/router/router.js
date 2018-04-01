import VueRouter from 'vue-router'

import { STORAGE_AUTH } from '../modules/auth/store/'
import Admin from '../components/Admin.vue'

import Login from '../modules/auth/views/Login.vue'
import Dashboard from '../modules/dashboard/views/Dashboard.vue'

// import AdminMenu from '../modules/menu/views/AdminMenu.vue'
// import AdminCategory from '../modules/category/views/AdminCategory.vue'
//
// import AdminProduct from '../modules/product/views/AdminProduct.vue'
// import AdminProductAdd from '../modules/product/views/AdminProductAdd.vue'
// import AdminProductEdit from '../modules/product/views/AdminProductEdit.vue'
//
// import AdminPost from '../modules/post/views/AdminPost.vue'
// import AdminPostAdd from '../modules/post/views/AdminPostAdd.vue'
// import AdminPostEdit from '../modules/post/views/AdminPostEdit.vue'
//
// import AdminBanner from '../modules/banner/views/AdminBanner.vue'
//
// import AdminSetup from '../modules/setup/views/AdminSetup.vue'

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
