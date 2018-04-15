import Vue from 'vue'

export default {
    items: [
        {
            name: 'Dashboard',
            url: '/dashboard',
            icon: 'icon-speedometer',
            // badge: {
            //     variant: 'primary',
            //     text: 'NEW'
            // }
        },
        {
            name: 'Categories',
            icon: 'icon-list',
            url: '/categories',
        },
        {
            name: 'Authors',
            icon: 'icon-list',
            url: '/authors',
        },
        {
            name: 'Pages',
            icon: 'icon-list',
            children: [
                {
                    name: 'About us',
                    url: '/about-us',
                },
                {
                    name: 'Join us',
                    url: '/join-us',
                },
                {
                    name: 'Instructors',
                    url: '/instructors',
                },
                {
                    name: 'Data scientists',
                    url: '/data-scientists',
                },
                {
                    name: 'Events',
                    url: '/events',
                },
                {
                    name: 'Courses',
                    url: '/courses',
                },
                {
                    name: 'R&D',
                    url: '/research-developments',
                },
                {
                    name: 'Products',
                    url: '/products',
                },
            ]
        },
    ]
}
