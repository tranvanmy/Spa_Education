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
