import VueRouter from 'vue-router'

import { STORAGE_AUTH } from 'Admin/modules/auth/store/'
import Admin from 'Admin/components/Admin.vue'

import Login from 'Admin/modules/auth/views/Login.vue'
import Dashboard from 'Admin/modules/dashboard/views/Dashboard.vue'

import AdminAuthor from 'Admin/modules/author/views/AdminAuthor.vue'
import AdminAuthorAdd from 'Admin/modules/author/views/AdminAuthorAdd.vue'
import AdminAuthorEdit from 'Admin/modules/author/views/AdminAuthorEdit.vue'

import AdminEvent from 'Admin/modules/event/views/AdminEvent.vue'
import AdminEventAdd from 'Admin/modules/event/views/AdminEventAdd.vue'
import AdminEventEdit from 'Admin/modules/event/views/AdminEventEdit.vue'

import AdminAboutUs from 'Admin/modules/about-us/views/AdminAboutUs.vue'
import AdminAboutUsAdd from 'Admin/modules/about-us/views/AdminAboutUsAdd.vue'
import AdminAboutUsEdit from 'Admin/modules/about-us/views/AdminAboutUsEdit.vue'

import AdminJoinUs from 'Admin/modules/join-us/views/AdminJoinUs.vue'
import AdminJoinUsAdd from 'Admin/modules/join-us/views/AdminJoinUsAdd.vue'
import AdminJoinUsEdit from 'Admin/modules/join-us/views/AdminJoinUsEdit.vue'

import AdminInstructor from 'Admin/modules/instructor/views/AdminInstructor.vue'
import AdminInstructorAdd from 'Admin/modules/instructor/views/AdminInstructorAdd.vue'
import AdminInstructorEdit from 'Admin/modules/instructor/views/AdminInstructorEdit.vue'

import AdminCourse from 'Admin/modules/course/views/AdminCourse.vue'
import AdminCourseAdd from 'Admin/modules/course/views/AdminCourseAdd.vue'
import AdminCourseEdit from 'Admin/modules/course/views/AdminCourseEdit.vue'

import AdminCategory from 'Admin/modules/category/views/AdminCategory.vue'
import AdminCategoryAdd from 'Admin/modules/category/views/AdminCategoryAdd.vue'
import AdminCategoryEdit from 'Admin/modules/category/views/AdminCategoryEdit.vue'

import AdminResearchDevelopment from 'Admin/modules/research-develop/views/AdminResearchDevelopment.vue'
import AdminResearchDevelopmentAdd from 'Admin/modules/research-develop/views/AdminResearchDevelopmentAdd.vue'
import AdminResearchDevelopmentEdit from 'Admin/modules/research-develop/views/AdminResearchDevelopmentEdit.vue'

import AdminProduct from 'Admin/modules/product/views/AdminProduct.vue'
import AdminProductAdd from 'Admin/modules/product/views/AdminProductAdd.vue'
import AdminProductEdit from 'Admin/modules/product/views/AdminProductEdit.vue'

import AdminDataScientist from 'Admin/modules/data-scientist/views/AdminDataScientist.vue'
import AdminDataScientistAdd from 'Admin/modules/data-scientist/views/AdminDataScientistAdd.vue'
import AdminDataScientistEdit from 'Admin/modules/data-scientist/views/AdminDataScientistEdit.vue'

import AdminComment from 'Admin/modules/comment/views/AdminComment.vue'

import AdminBanner from 'Admin/modules/banner/views/AdminBanner.vue'
import AdminBannerAdd from 'Admin/modules/banner/views/AdminBannerAdd.vue'
import AdminBannerEdit from 'Admin/modules/banner/views/AdminBannerEdit.vue'

import AdminSetup from 'Admin/modules/setup/views/AdminSetup.vue'

const router =  new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/',
            redirect: '/setups',
            component: Admin,
            name: 'Trang chủ',
            meta: { requiresAuth: true },
            children: [
                {
                    path: '/setups',
                    name: 'Setups',
                    component: AdminSetup
                },
                {
                    name: 'Instructors',
                    path: '/instructors',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'Instructor list',
                            component: AdminInstructor
                        },
                        {
                            path: 'add',
                            name: 'Add Instructor',
                            component: AdminInstructorAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update Instructor',
                            component: AdminInstructorEdit
                        }
                    ]
                },
                {
                    name: 'Authors',
                    path: '/authors',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'Author list',
                            component: AdminAuthor
                        },
                        {
                            path: 'add',
                            name: 'Add Author',
                            component: AdminAuthorAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update Author',
                            component: AdminAuthorEdit
                        }
                    ]
                },
                {
                    name: 'Categories',
                    path: '/categories',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'Category list',
                            component: AdminCategory
                        },
                        {
                            path: 'add',
                            name: 'Category Add',
                            component: AdminCategoryAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update Category',
                            component: AdminCategoryEdit
                        }
                    ]
                },
                {
                    name: 'DataScientists',
                    path: '/data-scientists',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'DataScientist list',
                            component: AdminDataScientist
                        },
                        {
                            path: 'add',
                            name: 'Add DataScientist',
                            component: AdminDataScientistAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update DataScientist',
                            component: AdminDataScientistEdit
                        }
                    ]
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
                        {
                            path: 'edit/:id',
                            name: 'Update Event',
                            component: AdminEventEdit
                        }
                    ]
                },
                {
                    name: 'About us',
                    path: '/about-us',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'About us list',
                            component: AdminAboutUs
                        },
                        {
                            path: 'add',
                            name: 'Add About us',
                            component: AdminAboutUsAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update About us',
                            component: AdminAboutUsEdit
                        }
                    ]
                },
                {
                    name: 'Join us',
                    path: '/join-us',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'Join us list',
                            component: AdminJoinUs
                        },
                        {
                            path: 'add',
                            name: 'Add Join us',
                            component: AdminJoinUsAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update Join us',
                            component: AdminJoinUsEdit
                        }
                    ]
                },
                {
                    name: 'Courses',
                    path: '/courses',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'Course list',
                            component: AdminCourse
                        },
                        {
                            path: 'add',
                            name: 'Add Course',
                            component: AdminCourseAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update Course',
                            component: AdminCourseEdit
                        }
                    ]
                },
                {
                    name: 'Research & Developments',
                    path: '/research-developments',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'Research & Development list',
                            component: AdminResearchDevelopment
                        },
                        {
                            path: 'add',
                            name: 'Add Research & Development',
                            component: AdminResearchDevelopmentAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update Research & Development',
                            component: AdminResearchDevelopmentEdit
                        }
                    ]
                },
                {
                    name: 'Products',
                    path: '/products',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'Product list',
                            component: AdminProduct
                        },
                        {
                            path: 'add',
                            name: 'Add Product',
                            component: AdminProductAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update Product',
                            component: AdminProductEdit
                        }
                    ]
                },
                {
                    name: 'Comments',
                    path: '/comments',
                    component: AdminComment,
                },
                {
                    name: 'Banners',
                    path: '/banners',
                    component: {
                        render(c) {
                            return c('router-view')
                        }
                    },
                    children: [
                        {
                            path: '',
                            name: 'Banner list',
                            component: AdminBanner
                        },
                        {
                            path: 'add',
                            name: 'Add Banner',
                            component: AdminBannerAdd
                        },
                        {
                            path: 'edit/:id',
                            name: 'Update Banner',
                            component: AdminBannerEdit
                        }
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
