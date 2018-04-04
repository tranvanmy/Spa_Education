import Vue from 'vue'

export default {
    items: [
        {
            name: 'Quản lý',
            url: '/dashboard',
            icon: 'icon-speedometer',
            // badge: {
            //     variant: 'primary',
            //     text: 'NEW'
            // }
        },
        {
            name: 'Instructors',
            icon: 'icon-list',
            children: [
                {
                    name: 'Instructor list',
                    url: '/instructors',
                },
                {
                    name: 'Add new Instructor',
                    url: '/instructors/add',
                }
            ]
        },
        {
            name: 'Authors',
            icon: 'icon-list',
            children: [
                {
                    name: 'Author list',
                    url: '/authors',
                },
                {
                    name: 'Add new Author',
                    url: '/authors/add',
                }
            ]
        },
        {
            name: 'Category',
            icon: 'icon-list',
            children: [
                {
                    name: 'Category list',
                    url: '/categories',
                },
                {
                    name: 'Add new Category',
                    url: '/categories/add',
                }
            ]
        },
        {
            name: 'Data Scientists',
            icon: 'icon-list',
            children: [
                {
                    name: 'Data Scientist list',
                    url: '/data-scientists',
                },
                {
                    name: 'Add new Data Scientist',
                    url: '/data-scientists/add',
                }
            ]
        },
        {
            name: 'Events',
            icon: 'icon-list',
            children: [
                {
                    name: 'Event list',
                    url: '/events',
                },
                {
                    name: 'Add new Event',
                    url: '/events/add',
                }
            ]
        },
        {
            name: 'Courses',
            icon: 'icon-list',
            children: [
                {
                    name: 'Course list',
                    url: '/courses',
                },
                {
                    name: 'Add new Course',
                    url: '/courses/add',
                }
            ]
        },
        {
            name: 'Research & Development',
            icon: 'icon-list',
            children: [
                {
                    name: 'Research & Development list',
                    url: '/research-developments',
                },
                {
                    name: 'Add new Research & Development',
                    url: '/research-developments/add',
                }
            ]
        },
        {
            name: 'Product',
            icon: 'icon-list',
            children: [
                {
                    name: 'Product list',
                    url: '/products',
                },
                {
                    name: 'Add new Product',
                    url: '/products/add',
                }
            ]
        },
        {
            name: 'About-us',
            icon: 'icon-list',
            children: [
                {
                    name: 'About us list',
                    url: '/about-us',
                },
                {
                    name: 'Add new About us',
                    url: '/about-us/add',
                }
            ]
        },
        {
            name: 'Join-us',
            icon: 'icon-list',
            children: [
                {
                    name: 'Join us list',
                    url: '/join-us',
                },
                {
                    name: 'Add new Join us',
                    url: '/join-us/add',
                }
            ]
        },
    ]
}
