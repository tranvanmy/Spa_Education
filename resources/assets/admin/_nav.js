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
            name: 'Events',
            icon: 'icon-list',
            children: [
                {
                    name: 'Event list',
                    url: '/events',
                },
                {
                    name: 'Add new',
                    url: '/events/add',
                }
            ]
        },
        // {
        //     name: 'Bài viết',
        //     icon: 'icon-list',
        //     children: [
        //         {
        //             name: 'Danh sách',
        //             url: '/posts',
        //         },
        //         {
        //             name: 'Thêm mới',
        //             url: '/posts/add',
        //         }
        //     ]
        // },
        // {
        //     name: 'Banner',
        //     icon: 'icon-list',
        //     url: '/banners',
        // },
        // {
        //     name: 'Cài đặt',
        //     icon: 'icon-list',
        //     url: '/setups',
        // },
    ]
}
